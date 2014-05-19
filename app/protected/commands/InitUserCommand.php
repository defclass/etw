 <?php

/**
 * @file   InitUserCommand.php
 * @author snowh4r3
 * @date   Thu Apr 24 12:50:27 2014
 * 
 * @brief  初始化用户的命令,主要是初始化有效父节点的container
 * 
 * 
 */

class InitUserCommand extends CommonCommand {
    private $_fathers;
    public function run(){
        $this->actionInitUser();
    }
    
    /** 
     * @todo 
     * 
     * @return 
     */
    public function actionInitUser(){
        /* 查出所有未初始化的用户 */
        Yii::import('application.modules.Admin.models.Admin');
        $not_init = Admin::model()->findAll('initp=:initp',array('initp'=>'no'));
        
        $command = Yii::app()->db->createCommand();
        /* 用Help类的工具来处理数据 */
        
        foreach($not_init as $obj){
            /* 每次获取，会自动调用RelationHelper::reset() */
            $rel_help_obj = RelationHelper::get_instance();
            
            /* 返回父节点ID相应的admin object */
            $father_obj_arr = $rel_help_obj->get_fathers($obj->aid);

            /* 每一个父节点的son_container都要更新*/
            foreach($father_obj_arr as $admin_obj){
                $this->save_fathers($obj->aid,$admin_obj->aid);
            }

            /** 
             * 更新完父节点，然后更新自己initp字段
             */
            $obj->initp = 'yes';
            
            if(!$obj->save()){
                Yii::log($obj->aid."保存sons失败",'error','console.InitUser');
            }
        }
    }


    /** 
     * @todo 在新增加一个子节点时，保存一个父节点的son_container
     * @param sid 当前子节点的id
     * @param fid 当前父节点的用户id
     * 
     * @return bool
     */
    private function save_fathers($sid,$fid){
        /* 如果是最高节点admin就不要保存了，没有太多意义 */
        if($fid == Yii::app()->params['top_node_id'])
            return true;
        
        Yii::import('application.modules.Admin.models.AdminSons');
        if(!isset($this->_fathers[$fid])){
            /* 找数据库里面是否有该父节点 */
            $father =  AdminSons::model()->findbyPk($fid);
            if($father == null ) {
                /* 没有该父节点则新建一个 */
                $father = new AdminSons();
                /* 初始化该对象 */
                $father->aid = $fid;
                $father->son_container = serialize(array());
            }
            $this->_fathers[$fid] = $father;
        }
        
        $sons = unserialize($this->_fathers[$fid]->son_container);
        if(!in_array($sid,$sons))
            $sons[] = $sid;
        
        $this->_fathers[$fid]->son_container = serialize($sons);
        
        if( $this->_fathers[$fid]->save())
            return true;
        else
            return false;
    }

}
