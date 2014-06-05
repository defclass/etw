<?php

class ManufacturerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			/* 'accessControl', // perform access control for CRUD operations */
			/* 'postOnly + delete', // we only allow deletion via POST request */
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
		);
	}



	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $brand_model = new Brand();
        $brand = $brand_model->search();
        
		$this->render('index',array(
			'brands'=>$brand->getData(),
             'pages'=>$brand->getPagination(),
		));
	}


    /** 
     * @todo 供应商详情页
     * 
     * @return 
     */
    public function actionBrandDetails(){
        $model = Brand::model();
        if(isset($_GET['id'])){
            $brand_obj = $model->findbyPK($_GET['id']);
            $this->render('BrandDetails',array(
                'brand'=>$brand_obj,
            ));
        }
    }


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Brand the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Brand::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Brand $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='brand-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
