<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Brands'=>array('index'),
				$model->bid,
			);
		?>
		<h1>查看Brand表的 #<?php echo $model->bid; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'bid',
		'brand_name',
		'logo',
			),
		)); ?>
	</div>
</div>