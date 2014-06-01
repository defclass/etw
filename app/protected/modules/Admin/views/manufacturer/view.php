<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Manufacturers'=>array('index'),
				$model->mid,
			);
		?>
		<h1>查看Manufacturer表的 #<?php echo $model->mid; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'mid',
		'manufacturer_name',
                'company_url',
                'comment',
			),
		)); ?>
	</div>
</div>