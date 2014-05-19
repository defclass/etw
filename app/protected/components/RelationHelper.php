<?php

/**
 * @file   RelationHelper.php
 * @author snowh4r3
 * @date   Fri Apr 25 11:29:43 2014
 * 
 * @brief  主要处理寻找父节点，子节点，另加一些条件来处理返回的
 *         结果集,在调用self::get_instance 会自动
 *         执行self::reset()方法，即重置返回的结果集和合法父节点ID
 * 
 * 
 */
Yii::import('application.modules.Admin.models.Admin');
Yii::import('application.modules.Admin.models.AdminRelation');
Yii::import('application.modules.Admin.models.AdminGroup');

class RelationHelper {
    private static $_instance = null;
    /** 
     * 原始的数据集
     */
    private  $_raw_array;
    
    /** 
     * 收集所有的子节点,为由近到远的有序数组
     */
    public $sons;

    /** 
     * 收集所有的父节点，为由近到远的有序数组
     */
    public $fathers;

    /** 
     * 在计算中，并不是每一个父节点都有效，父节点的等级可以是1,2,3各一个
     * 1,2各一个，或1一个有效,这是初始化状态
     */
    private $_valid_group;

    /** 
     * 索引是父节点等级，值代表的是遇到当前等级时，要消除$_valid_group中的
     * 相对应的元素和个数。
     * 该字段中一个元素只能抵消_valid_group相应的一个元素。
     * 只在$_clear_items中有，而在$_valid_group中无的，消除的时候没有副作用，无报错。
     */
    private $_clear_items ;
    
    /** 
     * @todo 初始化数据集
     * @param array 数据集应为admin_relation的对象集合并关联了用户等级
     * 
     * @return 
     */
    public function __construct(){
        $this->_raw_array= AdminRelation::model()->with('f.adminGroup')->findAll();
        $this->_valid_group = Yii::app()->params['relations']['valid_group'];
        $this->_clear_items = Yii::app()->params['relations']['clear_items'];
    }

    public static function get_instance(){
        if(self::$_instance === null){
            self::$_instance = new self();
        }
        self::$_instance->reset();
        return self::$_instance;
    }


    /** 
     * @todo 返回所有的叶子节点
     * @param fid  初始FID号
     * @param depth  深度
     * 
     */
    public  function get_sons($fid,$depth=0){
        static $i=0;
        if((bool)$this->_raw_array){
            //reset($this->_raw_array);
            foreach($this->_raw_array as $key=>$obj){
                if($obj->fid==$fid){
                    /* 记录当前数组的当前深度 */
                    $obj->depth=$depth;
                    
                    /* 记录当前的aid号 自增一个$i */
                    $this->sons[$i] = $obj->aid;
                    
                    /*
                     * 当前的ID没有作用了,防止在下面循环
                     * 等导致有性能问题的时间再来看这个unset是否有作用
                     * 如果用引用传值，在foreach的时候是否有指针不回位的情况？
                     * 等有时候再研究                   
                     */
                    //unset($this->_raw_array[$key]);
                    
                    /* 循环次数加1 */
                    $i++;
                    
                    /* 深度加1 */
                    $depth++;

                    /* 注意这里执行完函数后跳回到上一层循环时，深度要加1 */
                    $this->get_sons($obj->aid,$depth--);
                }
            }
        }
        /** 
         * 运行完foreach后且depth==1时，运算已经全部结束跳出循环
         */
        if($depth ==1){
            return $this->sons;
        }
    }


     
    /** 
     * @todo 依次返回所有的父节点id
     * @param in 包括关系的数据集
     * @param id  要查询的节点ID
     * @param array  数据传递的array
     * @return  array
     */
    public  function get_fathers($id){
        /* 到Admin了就返回 */
        /*
        if($id == Yii::app()->params['top_node_id']){             
            return $this->fathers;         
        }
        */

        foreach ($this->_raw_array as $row){     
            if($id == $row->aid){
                /**
                 * 做一个标记，如果forech 循环完都没有找到父节点
                 * 这时认为它已经没有父节点，该节点为最顶节点
                 * 最顶端节点的没有设置为$flag 所以检测没有设置
                 * $flag时，就到顶了，返回该数组
                 */
                $flag =1;
                /* 如果是有效的ID 就收集 */
                if($this->validate_father($row->f->adminGroup))
                    $this->fathers[] = $row->f;
                $return = $this->get_fathers($row['fid']);          
            }        
        }
        /* 判断是否为最高节点,到最高节点就返回 */
        if(!isset($flag)){
            return $this->fathers;
        }
        return $this->fathers;
    }

    /** 
     * @todo 重置结果集
     * 
     * @return 
     */
    public function reset(){
        $this->fathers = array();
        $this->sons = array();
        $this->_valid_group = Yii::app()->params['relations']['valid_group'];
        $this->_clear_items = Yii::app()->params['relations']['clear_items'];
    }

    /** 
     * @todo 验证当前节点的等级是否有效
     * @param obj AdminGroup对象
     * 
     * @return bool
     */
    private function validate_father(AdminGroup $obj){
        /** 
         * 如果不在数组中，那么是不合法的，其它的都是合法的
         */
        if(!in_array($obj->ag_id,$this->_valid_group)){
            return false;
        }

        $this->remove_items($obj->ag_id);
        return true;
    }
    /** 
     * @todo 根据当前的用户组ID判断要删除$this->_valid_group中的哪些元素
     * @param ag_id 用户组ID
     */
    private function remove_items($ag_id){
        /* 找到要清除的数组 */
        $clear_items = $this->_clear_items[$ag_id];
        
        /* 删除在_valid_group 与 clear_items中相同的元素 */
        foreach($clear_items as $suicide){
            foreach($this->_valid_group  as $key=>$target){
                if($suicide === $target){
                    unset($this->_valid_group[$key]);
                    /* 删除相应的元素后，跳出当前循环 */
                    continue;
                }
            }
        }
    }
    
}

