<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Articles'=>array('index'),
				$model->id,
			);
		?>
		<h1>查看Article表的 #<?php echo $model->id; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'id',
		'category_id',
		'headline',
		'author_id',
		'date',
		'isstatic',
		'content',
		'clicount',
		'keyword',
		'status',
		'order',
			),
		)); ?>
	</div>
</div>