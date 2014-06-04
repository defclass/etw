<?php

class ProductController extends Controller
{
    private $_model ;

    //public $defaultAction = 'Index';
    //public $layout = false;
	/**
	 * Declares class-based actions.
	 */
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
	public function actionIndex()
	{
        //$this->layout = "//layout/main";
        $product_model = new Product();
		$product_model->unsetAttributes();  // 清除默认值

        $data = array();
        if(isset($_GET['index']) && preg_match("/[0-9A-Za-z]/",$_GET['index'])){
            $product_model->index_search = $_GET['index'];
        }
        
        if(isset($_GET['classify']) && is_numeric($_GET['classify']) && $_GET['classify'] != 0 ){
            $data['cid'] = $_GET['classify'];
        }

        if(isset($_GET['brand']) && is_numeric($_GET['brand']) ){
            $data['bid'] = $_GET['brand'];
        }

        if(isset($_GET['manufacturer']) && is_numeric($_GET['manufacturer']) ){
            $data['mid'] = $_GET['manufacturer'];
        }


        if(isset($_GET['keyword'])){
            $data['model'] = $_GET['keyword'];
        }

        $product_model->attributes = $data;
        $products = $product_model->search();
        $classify_model = new Classify();
        /* 定义分类目录的跳转url */
        $nav_href = '';

        $classifies = $classify_model->all_classify();
        $nav_href = Yii::app()->createUrl('/Product/Index/').'/classify/';
        
//        if(isset($_GET['classify']) && $_GET['classify'] == 1401070747046472){
        $brands = Brand::Model()->search();
        $nav_href = Yii::app()->createUrl('/Product/Index/').'/classify/1401070747046472/brand/';

        
        $this->render('index',array(
             'products'=>$products->getData(),
             'pages'=>$products->getPagination(),
             'classifies'=>$classifies->getData(),
             'brands'=>$brands,
             'nav_href'=>$nav_href,
        ));
	}


    /** 
     * @todo 产品详情页
     * 
     * @return 
     */
    public function actionProductDetails(){
        $product = $this->loadModel();
        $order = new Order('ProductDetails');
        $order_detail = new  OrderDetail('ProductDetails');
        $code = new Captcha;

        if(isset($_POST['Order'])){
            $code->attributes  = $_POST['Captcha'];
            if($this->createAction('captcha')->validate($code->code,false)){
                $order->attributes = $_POST['Order'];
                $order_detail->attributes = $_POST['OrderDetail'];
                if($order->validate() && $order_detail->validate()){
                    $order->oid = Common::getMaxId();
                    if($order->save()){
                        $order_detail->od_id = Common::getMaxId();
                        $order_detail->oid = $order->oid;
                        $order_detail->model = $product->model;
                        $order_detail->manufacturer = $product->b->brand_name;
                        $order_detail->create_time = time();
                        if($order_detail->save()){
                            $rt = $this->OrderMail($order,$order_detail);
                            var_dump($rt);
                            Yii::app()->user->setFlash('success','成功发送！');
                        }
                    }
                }
            }else{
                $code->addError('code',"验证码不正确");
            }
        }

        $this->site_keywords = $product->model." ".$product->package;
        $this->render('productDetails',array(
            'product'=>$product,
            'order'=>$order,
            'order_detail'=>$order_detail,
            'code'=>$code,
        ));
        
    }

    /** 
     * @todo 分销品牌列表页
     * 
     */
    public function actionBrandList()
	{
        $brand_model = new Brand();
        $brands = $brand_model->all_brands();
        
        $this->render('brandList',array(
            'brands'=>$brands->getData(),
        ));
	}
    /** 
     * @todo 产品展示页面
     */
    public function actionProductDisplay(){
        $product_model = new Product();
        $products = $product_model->all_product();
        $this->render('productDisplay',array(
            'products'=>$products->getData(),
            'pages'=>$products->getPagination(),
        ));
    }
    /** 
     * @todo 应用范围
     */
    public function actionApplication(){
        $this->render('application');
    }


    /** 
     * @todo 加载Model
     * 
     * @return 
     */
    public function loadModel()	{
		if($this->_model===null)
            {
                if(isset($_GET['id']))
                    $this->_model=Product::model()->findbyPk($_GET['id']);
                if($this->_model===null)
                    throw new CHttpException(404,'请求的页面不存在');
            }
		return $this->_model;
	}

    public function OrderMail($order_obj,$order_detail){
        $message = new YiiMailMessage;
        $message->view = "NewOrder";
        $params = array('order_obj'=>$order_obj,'order_detail'=>$order_detail);
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
