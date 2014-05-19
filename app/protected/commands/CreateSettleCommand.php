<?php
/**
 * @file   CreateSettleCommand.php
 * @author snowh4r3
 * @date   Sat Apr 26 14:20:15 2014
 * 
 * @brief  
 * 
 * 
 */

class CreateSettleCommand extends CommonCommand {

    public function run(){
        $this->actionCreateSettRecord();
    }

    public function actionCreateSettRecord(){
        //debug mode 20140502
        list($head,$tail) = $this->head_tail_a_mouth();

        //product mode
        //list($head,$tail) = $this->head_tail_a_mouth($this->a_mouth_before());
        
        $commmand = Yii::app()->db->createCommand();
        /* 以人分组 获取不同人的总金额 */
        $records = $commmand->select(array('aid','sum(amount) as total_amount','update_time'))
                           ->from('{{popularize_detail}}')
                           ->where(array('and',"status = 1","$head< update_time","update_time<$tail"))
                            ->group(array('aid'))
                           ->queryAll();
        foreach($records as $record){
            $transation = Yii::app()->db->beginTransaction();
            try{
                if(!$this->save_settle($record))
                    throw new Exception("保存settlement记录失败,对应的aid为".$record['aid']);
                $commmand->reset();
                $result = $commmand->update(
                    '{{popularize_detail}}',
                    array('status'=>2),
                    'aid=:aid and update_time > :head and update_time < :tail',
                    array(':aid'=>$record['aid'],':head'=>$head,':tail'=>$tail)
                );
                if(!$result)
                    throw new Exception('更新popularize_detail失败,对应的aid为'.$record['aid']);
                $transation->commit();
            }catch(Exception $e){
                Yii::log($e->getMessage(),'error','console.settlement');
                $transation->rollback();
                
            }
        }
    }

    /** 
     * @todo 保存一条settlement记录
     * @param array 包含aid,和该ID当月佣金之和 两个元素
     * 
     * @return bool
     */
    private function save_settle(array $array){
        Yii::import('application.modules.Admin.models.Settlement');
        $sett = new Settlement();
        $sett->sid = Common::getMaxID();
        $sett->aid = $array['aid'];
        $sett->amount = $array['total_amount'];
        $sett->year_month = date("Y/m",$array['update_time']);
        $sett->create_time = time();
        $sett->status = 0;
        return $sett->save();
    }

    /** 
     * @todo   取得某月的第1秒的时间戳,及当月最后一秒的时间戳
     * @param str 时间 字符串
     * 
     * @return array
     */
    private function head_tail_a_mouth($str=null){
        if($str==null)
            $the_time = time();
        else
            $the_time = strtotime($str);
        $head = strtotime(date("Y-m-01",$the_time));
        $tail = strtotime("+1 month",$head);
        $tail--;
        return array($head,$tail);
    }

    /** 
     * @todo 计算某天的一个月以前
     * 
     * @return 
     */
    private function a_mouth_before(){
        $a_mouth_before = strtotime("-1 month");
        return date("Y-m-d H:i:s",$a_mouth_before);
    }


}
