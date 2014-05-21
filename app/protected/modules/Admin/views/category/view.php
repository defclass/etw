<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Categories'=>array('index'),
				$model->name,
			);
		?>
		<h1>查看Category表的 #<?php echo $model->cid; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'cid',
		'name',
		'fid',
		'issingle',
			),
		)); ?>
	</div>
</div>