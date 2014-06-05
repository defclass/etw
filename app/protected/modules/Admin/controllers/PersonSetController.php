<?php
/**
 * 导入dwz 帮助类
 */
Yii::import('ext.dwz.DwzHelper');

class PersonSetController extends BackController
{

    /**
	 * @var CActiveRecord 当前载入的model实例
	 */
	private $_model;

	public function actionIndex()
	{
        $model = new PersonSetForm();
        if(isset($_POST['PersonSetForm'])){
            $data = $_POST['PersonSetForm'];
            if(trim($data['new_pass']) != trim($data['repeat_pass'])){
                $model->addError('repeat_pass',"两次输入的密码不一致");
                DwzHelper::error($model);
            }
            $data['username'] = Yii::app()->user->login_name;
            $model->attributes=$data;
            
            if(!$model->validate()){
                DwzHelper::error($model);
            }
            

            $admin_model = Admin::model()->findbyPk(Yii::app()->user->aid);
            
            $admin_model->salt = Common::randon_str(4);
            $admin_model->login_passwd = Common::hashPassword(trim($data['new_pass']),$admin_model->salt);
    
            if($admin_model->save())
                DwzHelper::success('sucess！');
            else{
                $model->addError('repeat_pass',"未知错误，联系开发人员");
                DwzHelper::error($model);
            }
                
        }
        
		$this->render('index',array(
			'model'=>$model,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
    	/**
	 * 根据GET变量返回Articles表的主键记录,如果没有找到则抛出错误
	 */

}