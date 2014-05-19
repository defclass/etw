<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#project-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Projects</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'project-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'project_id',
		'project_id_level',
		'ind_id',
		'project_name',
		'in_area',
		'Cooperation',
		/*
		'how_used',
		'measure_id',
		'feasibility_report',
		'analysis_report',
		'total_money',
		'time_imit',
		'tran_rate',
		'close_time',
		'min_unit',
		'pub_user_id',
		'pub_time',
		'check_time_1',
		'check_time_2',
		'project_left_money',
		'now_status',
		'noa',
		'ywy_name',
		'sh_bz',
		'khzstqj',
		'shfy',
		'fwfy',
		'zhglf',
		'month_limit',
		'wyb_select',
		'advance_repayment',
		'timing_type',
		'is_exp',
		'customer_id',
		'is_remote',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
