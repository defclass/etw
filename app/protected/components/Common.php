<?php
class Common {
    /**
     * 生成唯一id
     * @deprecated use gen_pk() instead
     * @return int
     */
    public static  function getMaxId() {
        $uid = time().substr(microtime(),2,6);
        return $uid;
    }

    /**
     * 生成Primary Key需要的序列号
     *
     * @return void
     */
    public static function gen_pk() {
        return $this->getMaxId();
    }
    /** 
     * @todo 生成随机密码
     * @param length 密码长度,默认为8位
     * 
     * @return 
     */
    public static function  randon_str( $length = 8 ) {  
        // 密码字符集，可任意添加你需要的字符  
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_ []{}~`+=,.;:/?|';
        $password ="";  
        for ( $i = 0; $i < $length; $i++ ){  
            // 这里提供两种字符获取方式  
            // 第一种是使用 substr 截取$chars中的任意一位字符；  
            // 第二种是取字符数组 $chars 的任意元素  
            // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);  
            $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
        }  
        return $password;  
    }

    /** 
     * @todo 返回所有的叶子节点
     * @param in 要查的结果集
     * @param out  收集的数据集
     * @param fid  初始FID号
     * @param depth  深度
     * 
     */
    public  static function get_sons(array $in,&$out=array(),$fid=0,$depth=0){
        static $i=0;
        if((bool)$in){
            //reset($in);
            foreach($in as $key=>$row){
                if($row['fid']==$fid){
                    /* 记录当前数组的当前深度 */
                    $row['depth']=$depth;
                    
                    /* 记录当前的aid号 自增一个$i */
                    $out[$i] = $row['aid'];
                    
                    /*
                     * 当前的ID没有作用了,防止在下面循环
                     * 等导致有性能问题的时间再来看这个unset是否有作用
                     * 如果用引用传值，在foreach的时候是否有指针不回位的情况？
                     * 等有时候再研究                   
                     */
                    //unset($in[$key]);
                    
                    /* 循环次数加1 */
                    $i++;
                    
                    /* 深度加1 */
                    $depth++;

                    /* 注意这里执行完函数后跳回到上一层循环时，深度要加1 */
                    self::get_sons($in,$out,$row['aid'],$depth--);
                }
            }
        }
    }


     
    /** 
     * @todo 依次返回所有的父节点id
     * @param in 包括关系的数据集
     * @param id  要查询的节点ID
     * @param array  数据传递的array
     * @return  array
     */
    public static function get_fathers($in,$id,$array = array()){
        /* 判断是否为最高节点 */
        /*
        if($id == Yii::app()->params['top_node_id']){             
            return $array;         
        }
        */
        foreach ($in as $row){     
            if($id == $row['aid']){
                /**
                 * 做一个标记，如果forech 循环完都没有找到父节点
                 * 这时认为它已经没有父节点，该节点为最顶节点
                 * 最顶端节点的没有设置为$flag 所以检测没有设置
                 * $flag时，就到顶了，返回该数组
                 */
                $flag =1;
                $array[] = $row['fid'];
                $return = self::get_fathers($in,$row['fid'],$array);          
            }        
        }
        if(!isset($flag)){
            return $array;
        }
        return $return;
    }
}
    
