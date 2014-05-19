dwz
=====

yii users who want use dwz  [dwz](j-ui.com) ui ,modify the old [yii-dwz extension](http://www.yiiframework.com/extension/dwzinterface)

user组件的配置：
----
```[php]
 'user' => array(
        // 'class' => 'RWebUser',
        // enable cookie-based authentication
        'allowAutoLogin' => true,
        // for dwz :
        'loginRequiredAjaxResponse'=> '{"statusCode":"301", "message":"会话超时了","forwardUrl":"site/login", "callbackType":"forward"}
       ',//'{"statusCode":"301", "message":"会话超时"}',
        'loginUrl'=>array('/account/account/login'),
    ),
```

## 左侧菜单 示例：
```[php]

<?php $this->widget('zii.widgets.CMenu',array(
	'activateParents'=>true,
	'htmlOptions'=>array('class'=>'tree treeFolder expand'),
	'items'=>array(
		array('label'=>'文章管理', 'url'=>array('#'),'items'=>array(
			array('label'=>'创建文章', 'url'=>array('/admin/default/create'), 'linkOptions'=>array('target'=>'dialog','rel'=>'art_create')),
			array('label'=>'管理文章', 'url'=>array('/admin/articles/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'art_manager')),
		)),
		array('label'=>'商标分类管理', 'url'=>array('/admin/tmtype/admin'),'items'=>array(
			array('label'=>'创建商标分类', 'url'=>array('/admin/tmtype/create'), 'linkOptions'=>array('target'=>'navTab','rel'=>'tm_create')),
			array('label'=>'管理商标分类', 'url'=>array('/admin/tmtype/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'tm_manager')),
		)),
		array('label'=>'栏目管理', 'url'=>array('/admin/ArtCategory/'), 'linkOptions'=>array('target'=>'navTab','rel'=>'list_manager')),
        array('label'=>'Msg创建', 'url'=>array('/admin/msg/create'), 'linkOptions'=>array('target'=>'navTab','rel'=>'msg_create',)),
        array('label'=>'Msg管理', 'url'=>array('/admin/msg/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'msg_admin','fresh'=>'false')),
        array('label'=>'MsgList', 'url'=>array('/admin/msg/index'), 'linkOptions'=>array('target'=>'navTab','rel'=>'msg_list')),
        array('label'=>'Msg管理(iframe打开)', 'url'=>array('/admin/msg/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'msg_admin','external'=>"true")),
	),
)); ?>

```
rel 最好写上有意义的字段 比如可以跟前面的url有某种关系  rel另一个用处是用来ajax刷新的：
下列是ajax更新后 刷新当前页（msg_admin）
```[php]

public function actionUpdate()
	{
		$model=$this->loadModel();

		// 如果需要AJAX验证请取消下面这一行的注释
		// $this->performAjaxValidation($model);

		if(isset($_POST['Msg']))
		{
			$model->attributes=$_POST['Msg'];
			if($model->save())
                DwzHelper::success('更新完成！','msg_admin');//要自动刷新就把后面的mArticle改成你的navTablId(就是打开navTab的链接中的rel)不用刷新可直接调用$this->dwz();即可
			else
                DwzHelper::error($model);
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
```

