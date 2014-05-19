
<?php $this->widget('zii.widgets.CMenu',array(
	'activateParents'=>true,
	'htmlOptions'=>array('class'=>'tree treeFolder expand'),
	'items'=>array(
		array('label'=>'后台用户管理', 'url'=>array('#'),'items'=>array(
			array('label'=>'后台用户管理', 'url'=>array('/Admin/Admin/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'art_manager')),
			array('label'=>'后台用户组管理', 'url'=>array('/Admin/AdminGroup/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'adminGroup_manager')),
		)),
		array('label'=>'客户与订单管理', 'url'=>array('#'),'items'=>array(
			array('label'=>'订单管理', 'url'=>array('/Admin/Order/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Order')),
			array('label'=>'客户管理', 'url'=>array('/Admin/Customer/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Customer')),
		)),
		array('label'=>'财务管理', 'url'=>array('#'),'items'=>array(
			array('label'=>'推广收益审核', 'url'=>array('/Admin/PopularizeDetail/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'PopularizeDetail')),
			array('label'=>'结算审核', 'url'=>array('/Admin/Settlement/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Settlement')),
			array('label'=>'提现管理', 'url'=>array('/Admin/EnchashmentRecord/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'EnchashmentRecord')),
		)),
        array('label'=>'系统设置', 'url'=>array('#'),'items'=>array(
			array('label'=>'操作日志', 'url'=>array('/Admin/OperateLog/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'OperateLog')),
            array('label'=>'参数设置', 'url'=>array('/Admin/Parameter/admin'), 'linkOptions'=>array('target'=>'navTab','rel'=>'Parameter')),
		)),

		
	),
)); ?>
	