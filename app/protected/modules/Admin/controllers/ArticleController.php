<?php
/**
 * 导入dwz 帮助类
 */
Yii::import('ext.dwz.DwzHelper');

class ArticleController extends BackController
{
	/**
	 * @var CActiveRecord 当前载入的model实例
	 */
	private $_model;
    
    /** 
     * @var 上传附件的扩展名
     */
    private $_img_extension = array('jpg','png','bmp','jepg');

    /** 
     * @var 上传附件的大小 
     */

    private $_img_size = 2097152;//2MB
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
		$model=new Article;

		// 如果需要AJAX验证请取消下面这一行的注释
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
            /* 新记录则添加ID */
            if($model->isNewRecord){
                $data = $_POST['Article'];

                /* 处理文章图片的上传结果 */
                $param=array(
                    'model'=>$model,
                    'db_field' => 'article_image',
                    'dir' => 'ArticleImages'.date("/Y/m/d"),
                    'name' => 'Article[article_image]'
                );
                $upload_obj = new DwzUploadImage($param);
                $rs = $upload_obj->upload();

                if($rs['status'] == 'ERROR'){
                    $model->addError('article_image',$rs['msg']);
                    DwzHelper::error($model);
                }elseif($rs['status'] == 'SUCCESS' ){
                    /* 给article_imagepath赋值 */
                    $data['article_image'] = $rs['msg'];
                }elseif($rs['status'] == 'NO_UPLOAD'){
                    unset($data['article_image']);
                }
                $data['id'] = Common::getMaxID();
                $data['date'] = strtotime($data['date']);
                $data['author_id'] = Yii::app()->user->aid;
            }
            $model->attributes=$data;
			if($model->save()){
                DwzHelper::success('sucess！');
            }else{
                DwzHelper::error($model);
            }
		}
        $category = $this->get_category();
        $model->date = time();
		$this->render('create',array(
			'model'=>$model,
            'category'=>$category,
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
        
		if(isset($_POST['Article']))
		{
            $data = $_POST['Article'];
            $data['date'] = strtotime($data['date']);

            /* 处理文章图片的上传结果 */
            $param=array(
                'model'=>$model,
                'db_field' => 'article_image',
                'dir' => 'ArticleImages'.date("/Y/m/d"),
                'name' => 'Article[article_image]'
            );
            $upload_obj = new DwzUploadImage($param);
            $rs = $upload_obj->upload();

            if($rs['status'] == 'ERROR'){
                $model->addError('article_image',$rs['msg']);
                DwzHelper::error($model);
            }elseif($rs['status'] == 'SUCCESS' ){
                /* 给article_imagepath赋值 */
                $data['article_image'] = $rs['msg'];
            }elseif($rs['status'] == 'NO_UPLOAD'){
                unset($data['article_image']);
            }

			$model->attributes=$data;
			if($model->save())
                DwzHelper::success('更新完成！','mArticle');//要自动刷新就把后面的mArticle改成你的navTablId(就是打开navTab的链接中的rel)不用刷新可直接调用$this->dwz();即可
			else
                DwzHelper::error($model);
		}
        $category = $this->get_category();
        
		$this->render('update',array(
			'model'=>$model,
            'category'=>$category,
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
		$dataProvider=new CActiveDataProvider('Article');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * 管理所有model记录
	 */
	public function actionAdmin()
	{
		$model=new Article('search');
		$model->unsetAttributes();  // 清除默认值
		if(isset($_GET['Article'])){
			$model->attributes=$_GET['Article'];
            $model->search();
        }

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    /** 
     * @todo 获取文章分类id=>real_name组成的数组
     * 
     * @return 
     */
    private function get_category(){
       $command = Yii::app()->db->createCommand();
       /* 取出所有属于该用户的所有customer记录 */
       $datas = $command->select('cid,name')
                       ->from('{{category}}')
                       ->queryAll();
       $container = array();
       foreach($datas as $data){
           $key = $data['cid'];
           $value = $data['name'];
           $container[$key] = $value;
       }

       return $container;
    }

	/**
	 * 根据GET变量返回Articles表的主键记录,如果没有找到则抛出错误
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Article::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    /** 
     * @todo 文章模块的图片上传功能
     * 
     * @return 
     */
    public function actionUpload(){
        $image = CUploadedFile::getInstanceByName('filedata');

        if(!in_array($image->getExtensionName(),$this->_img_extension)){
            $this->output_json('error','图片格式仅限jpg,png,bmp,jepg');
        }
        if( $image->getSize() > $this->_img_size) {
            $this->output_json('error','图片大小不要超2M');
        }
        $str = date("/Y/m/d");
        $dir='/assets/Uploads/Artiles'.$str.'/';
        $local_dir = Yii::getPathOfAlias('webroot').$dir;
        if (!is_dir($local_dir)) {
            mkdir($local_dir,0777,true);
        }
        $name = $local_dir.$image->name;
        //文件名绝对路径
        $status = $image->saveAs($name,true);
        $this->output_json('success',$dir.$image->name);
    }

    protected function output_json($code,$msg){
        if($code == 'success'){
            $arr['err'] = '';
            $arr['msg'] = $msg;
        }

        if($code == 'error') {
            $arr['err'] = $msg;
            $arr['msg'] ='';
        }
        echo json_encode($arr);
        exit;
    }
}
