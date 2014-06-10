<?php

class SendRFQController extends Controller
{
    private $_model ;


    public function actions()
	{
		return array(
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'maxLength'=>'4',       // 最多生成几个字符
                'minLength'=>'3',       // 最少生成几个字符
                'height'=>'30',
                'width'=>'60',
                'testLimit'=>1,
            ), 
		);
	}

	/**
	 * @默认页面
	 */
	public function actionIndex(){
        $order = new Order('ProductDetails');
        $code = new Captcha;
        $order_detail = new OrderDetail();
        $OrderDetails[] = $order_detail;


        if(isset($_POST['Order'])){
            $code->attributes  = $_POST['Captcha'];
            if($this->createAction('captcha')->validate($code->code,false)){
                $order->attributes = $_POST['Order'];
                $OrderDetails = $_POST['OrderDetail'];
                
                $result = true;

                /* 验证每一个型号 */
                foreach($OrderDetails as $key => $Detail){
                    $order_detail = new  OrderDetail('ProductDetails');
                    $order_detail->attributes = $Detail;
                    $result = $result && $order_detail->validate();
                    $OrderDetails[$key] = $order_detail;
                }
                
                if($order->validate() && $result){
                    $order->oid = Common::getMaxId();
                    if($order->save()){
                        reset($OrderDetails);
                        foreach($OrderDetails as $key => $Detail){
                            $Detail->od_id = Common::getMaxId();
                            $Detail->oid = $order->oid;
                            $Detail->create_time = time();
                            $Detail->save();
                        }
                        $this->OrderMail($order,$OrderDetails);
                        Yii::app()->user->setFlash('success','Send success！');
                        }
                    }
            }else{
                $code->addError('code',Yii::t('main','Incorrect verification code'));
            }
        }

        
        $this->render('index',array(
            'order_details' => $OrderDetails,
            'order' => $order ,
            'code' => $code,
        ));
	}

    public function OrderMail($order_obj,$order_details){
        $message = new YiiMailMessage;
        $message->view = "NewOrders";
        $params = array('order_obj'=>$order_obj,'order_details'=>$order_details);
        $message->subject = '有新订单了！';
        $message->setBody($params, 'text/html');                
        $message->addTo(Yii::app()->params['ReceiveEmail']);
        $message->from = Yii::app()->params['adminEmail'];   
        if(Yii::app()->mail->send($message))
            return true;
        else
            return false;
    }


}
