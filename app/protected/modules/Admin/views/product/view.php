<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Products'=>array('index'),
				$model->pid,
			);
		?>
		<h1>查看Product表的 #<?php echo $model->pid; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'pid',
		'classify',
		'brand',
		'manufacturer',
		'model',
		'package',
		'RoHS',
		'datecode',
		'quantity',
		'direction',
		'create_time',
		'status',
			),
		)); ?>
	</div>
</div>