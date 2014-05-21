
<?php $this->widget('zii.widgets.CMenu',array(
	'activateParents'=>true,
	'htmlOptions'=>array('class'=>'tree treeFolder expand'),
	'items'=>array(
		array('label'=>'后台用户管理', 'url'=>array('#'),'items'=>array(
			array('label'=>'后台用户管理', 'url'=>array('/Admin/Admin/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'art_manager')),
		)),
        array('label'=>'文章与新闻', 'url'=>array('#'),'items'=>array(
			array('label'=>'文章编辑', 'url'=>array('/Admin/Article/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'art_manager')),
			array('label'=>'文章分类', 'url'=>array('/Admin/Category/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'art_manager')),
		)),

		array('label'=>'产品与供应商', 'url'=>array('#'),'items'=>array(
			array('label'=>'品牌管理', 'url'=>array('/Admin/Brand/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Order')),
			array('label'=>'供应商管理', 'url'=>array('/Admin/Manufacturer/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Order')),
			array('label'=>'产品分类', 'url'=>array('/Admin/Classify/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Order')),
			array('label'=>'产品管理', 'url'=>array('/Admin/Product/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Order')),
		)),
		array('label'=>'订单管理', 'url'=>array('#'),'items'=>array(
			array('label'=>'订单管理', 'url'=>array('/Admin/Order/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'PopularizeDetail')),
		)),
        /* array('label'=>'系统设置', 'url'=>array('#'),'items'=>array( */
		/* 	array('label'=>'操作日志', 'url'=>array('/Admin/OperateLog/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'OperateLog')), */
        /*     array('label'=>'参数设置', 'url'=>array('/Admin/Parameter/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Parameter')), */
		/* )), */

		
	),
)); ?>
	