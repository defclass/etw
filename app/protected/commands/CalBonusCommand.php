<?php
/**
 * @file   CalBonusCommand.php
 * @author snowh4r3
 * @date   Fri Apr 25 12:58:35 2014
 * 
 * @brief  这是计算推广员奖励的脚本
 * 
 * 
 */

class CalBonusCommand extends CommonCommand {
    private $_group_map = array(
        '2'=>'channel',
        '3'=>'supervisor',
        '4'=>'consultant',
    );

    public function run(){
        $this->actionCreatePopRecord();
    }

    /** 
     * @todo 生成推广收益记录,基本过程：先查找已付余款的订单->
     *       根据订单计算直接销售人的提成、有效父节点的提成->更新该订单
     *      
     * 
     * @return 
     */
    public function actionCreatePopRecord(){
        /* 查找要更新的订单 */
        Yii::import('application.modules.Admin.models.Order');
        $availble_orders = Order::model()->findAll(
            array(
                
                'condition'=>'status=:status',
                'params'=>array(':status'=>6)
            ));
        
        foreach($availble_orders as $order_obj){
            /* 判断该订单是否是有效的订单 */
            if(!$this->valid_order($order_obj)){
                continue;
            }
            $transation = Yii::app()->db->beginTransaction();
            try{
                /* 计算直接销售人的提成 */
                $rate_template = Yii::app()->params['commission'];
                $rate = $rate_template['salesman'];
                $amount = $order_obj->real_amount * $rate;

                if(!$this->create_pop($order_obj->aid,$order_obj,array($amount,$rate))){
                    throw new Exception('直接销售人的提成记录保存失败');
                }
            
                /* 计算父节点的提成 */
                $rel_help_obj = RelationHelper::get_instance();
                $fathers = $rel_help_obj->get_fathers($order_obj->aid);
                if(!empty($fathers)){
                    foreach($fathers as $admin_obj){
                        $raw = $this->cal_father_bonus($admin_obj->adminGroup,$order_obj);
                        if(!$this->create_pop($admin_obj->aid, $order_obj,$raw)){
                            throw new Exception("父节点的提成保存失败,父节点的ID为:".$admin_obj->aid);
                        }
                    }
                }

                /* 将该条订单记录标记为财务审核中 */
                $order_obj->status = 7;
                if(!$order_obj->save())
                    throw new Exception("订单更新失败，订单ID为：".$order_obj->oid);
                $transation->commit();
                
            }catch(Exception $e){
                $transation->rollback();
                Yii::log($e->getMessage(),'error','console.calbonus');
            }

        }
    }

    /** 
     * @todo 生成一条推广记录
     * @param array  包含提成金额 和 提成比率
     * 
     * @return 
     */
    private function create_pop($aid,Order $obj, array $array){
        Yii::import('application.modules.Admin.models.PopularizeDetail');
        $pop = new PopularizeDetail();
        $pop->pid = Common::getMaxID();
        $pop->aid = $aid;
        $pop->cid =  $obj->cid;
        $pop->oid = $obj->oid;
        /* 提取提成金额和比率 */
        list($amount,$rate) = $array;
        $pop->amount = $amount;
        $pop->remark = serialize(array($rate));
        $pop->create_time = time();
        $pop->update_time = time();
        $pop->status = 0;
        return  $pop->save();
    }

    /** 
     * @todo 计算提成的方法 金额×提成比例
     * @param obj  用户组的对象
     * @param amount 基准金额
     * 
     * @return array array(金额，提成比例)
     */
    private function cal_father_bonus(AdminGroup $group_obj, Order $order_obj){
        $rate_template = Yii::app()->params['commission'];
        /* 转换一下可以使用配置的key */
        $key = $this->_group_map[$group_obj->ag_id];
        $rate = $rate_template[$key];
        $amount =  $order_obj->real_amount * $rate;
        return array($amount, $rate);
    }

    private function valid_order(Order $obj){
        /* 超级管理员推荐的订单不生成佣金 */
        if($obj->aid == Yii::app()->params['admin_id'])
            return false;

        /* 如果真实金额是0元则没有必要生成记录了 */
        if($obj->real_amount == 0 ) {
            Yii::log('已付余款的订单,但真实金额为0,订单ID:'.$obj->oid,'warning','console.human');
            return false;
        }
        
        return true;
    }

}
