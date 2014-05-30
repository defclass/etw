<?php

class ProductController extends Controller
{

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
			/*'page'=>array(
				'class'=>'CViewAction',
			),
            */
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        //$this->layout = "//layout/main";
        $product_model = new Product();
        $products = $product_model->all_product();
        $classify_model = new Classify();
        $classifies = $classify_model->all_classify();
        
        $this->render('index',array(
             'products'=>$products->getData(),
             'pages'=>$products->getPagination(),
             'classifies'=>$classifies->getData(),
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

    
}