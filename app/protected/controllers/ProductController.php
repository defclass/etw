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
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
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
}