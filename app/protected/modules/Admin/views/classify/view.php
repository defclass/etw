<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Classifies'=>array('index'),
				$model->cid,
			);
		?>
		<h1>查看Classify表的 #<?php echo $model->cid; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'cid',
		'classify_name',
			),
		)); ?>
	</div>
</div>