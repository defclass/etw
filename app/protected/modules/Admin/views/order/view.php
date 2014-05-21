<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Orders'=>array('index'),
				$model->oid,
			);
		?>
		<h1>查看Order表的 #<?php echo $model->oid; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'oid',
		'company_name',
		'email',
		'tel',
		'inquiry_content',
			),
		)); ?>
	</div>
</div>