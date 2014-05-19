<?php
/**
 * This is the template for generating a controller class file for CRUD feature.
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/**
 * 导入dwz 帮助类
 */
Yii::import('ext.dwz.DwzHelper');

class <?php echo $this->controllerClass; ?> extends <?php echo $this->baseControllerClass."\n"; ?>
{
	/**
	 * @var CActiveRecord 当前载入的model实例
	 */
	private $_model;

	/**
	 * @return array action 过滤器
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

    /**
    * @return array
    * easyUi 跟dwz 是互斥的两个css 只能二选一！！
    */
    public function behaviors(){
        return array(
          //'dwz'=>array('class'=>'dwz.behaviors.DwzControllerBehavior'),
        );
    }


/**
	 * 制定访问控制规则
	 * 使用这个方法的是'accessControl'过滤器.
	 * @return array 访问控制规则
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // 用户所有用户执行的操作
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // 允许所有认证的用户执行的操作
				'actions'=>array('create','update',$this->action->id),
				'users'=>array('@'),
			),
			array('allow', // 允许admin这个用户执行的操作
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // 其他操作拒绝所有用户访问
				'users'=>array('*'),
			),
		);
	}

	/**
	 * 显示model单个记录
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * 创建新model记录， 如果创建成功默认重定向到view页
	 */
	public function actionCreate()
	{
		$model=new <?php echo $this->modelClass; ?>;

		// 如果需要AJAX验证请取消下面这一行的注释
		// $this->performAjaxValidation($model);

		if(isset($_POST['<?php echo $this->modelClass; ?>']))
		{
			$model->attributes=$_POST['<?php echo $this->modelClass; ?>'];
			if($model->save()){
                DwzHelper::success('sucess！');
            }else{
                DwzHelper::error($model);
            }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * 更新指定的model记录.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// 如果需要AJAX验证请取消下面这一行的注释
		// $this->performAjaxValidation($model);

		if(isset($_POST['<?php echo $this->modelClass; ?>']))
		{
			$model->attributes=$_POST['<?php echo $this->modelClass; ?>'];
			if($model->save())
                DwzHelper::success('更新完成！','mArticle');//要自动刷新就把后面的mArticle改成你的navTablId(就是打开navTab的链接中的rel)不用刷新可直接调用$this->dwz();即可
			else
                DwzHelper::error($model);
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * 删除指定的model记录，如果删除成功则默认重定向到index页

	 */
	public function actionDelete()
	{
        $request = Yii::app()->request ;
		if($request->getIsPostRequest())
		{
			// 删除操作只允许POST请求操作
            if($this->loadModel()->delete()){
                DwzHelper::success('deleteSuccess！');
            }
		}
		else
			throw new CHttpException(400,'错误的请求，请不要重复这一请求');
	}

	/**
	 * 列出model所有记录
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('<?php echo $this->modelClass; ?>');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * 管理所有model记录
	 */
	public function actionAdmin()
	{
		$model=new <?php echo $this->modelClass; ?>('search');
		$model->unsetAttributes();  // 清除默认值
		if(isset($_GET['<?php echo $this->modelClass; ?>']))
			$model->attributes=$_GET['<?php echo $this->modelClass; ?>'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * 根据GET变量返回Articles表的主键记录,如果没有找到则抛出错误
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=<?php echo $this->modelClass; ?>::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'请求的页面不存在');
		}
		return $this->_model;
	}

	/**
	 * 执行AJAX验证
	 * @param CModel 被验证的model
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='<?php echo $this->class2id($this->modelClass); ?>-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
