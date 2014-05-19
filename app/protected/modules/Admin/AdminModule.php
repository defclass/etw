<?php

class AdminModule extends CWebModule
{
    /* 设置admin模块的assetsUrl */
    private $_assetsUrl;


    public function init()
	{
		// 这个方法在模块被创建时调用,自定义模块的代码可以放在这里

		// 导入模块级的 models模型 和 components组件
		$this->setImport(array(
			'Admin.models.*',
			'Admin.components.*',
		));
		//配置组件
		Yii::app()->setComponents(array(
			'clientScript'=>array(
				'class'=>'ext.dwz.DClientScript',
			),
		));
		Yii::import('ext.dwz.dwzHelper');
	}

    
	public function getAssetsUrl()
	{
		if($this->_assetsUrl===null)
			$this->_assetsUrl = Yii::app() -> getAssetManager() -> publish( Yii::getPathOfAlias( 'application.modules.Admin.assets' ),false, -1, true);
		return $this->_assetsUrl;
	}

	public function setAssetsUrl($value)
	{
		$this->_assetsUrl=$value;
	}
    
	
	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{

            /** 
             * 登陆还未登陆的情况进行路由设置
             * 未登陆的情况，如果访问后台则跳转到登陆
             * 登陆的情况，如果访问登陆注册界面(其中登陆中要访问退出,可让其访问)则跳转到后台。
             */
            if(Yii::app()->user->isGuest) {//未登陆的情况
                if('login' != $controller->id)
                    Yii::app()->request->redirect('/Admin/Login');
            }else{//登陆的情况
                if('login'  === $controller->id){
                    if($action->id !== 'logout')
                        Yii::app()->request->redirect('/Admin/');
                }
            }

			// 这个方法在模块控制器的操作被执行前调用
			if ($controller->id=='default' && $action->id=='index')
				$controller->layout='dwz';
			else{
				$controller->layout=false;
				Yii::app()->clientScript->registerJQuery=false;
			}
			return true;
		}
		else
			return false;
	}
}
