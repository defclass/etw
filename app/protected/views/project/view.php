<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->project_id,
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Update Project', 'url'=>array('update', 'id'=>$model->project_id)),
	array('label'=>'Delete Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->project_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>View Project #<?php echo $model->project_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'project_id',
		'project_id_level',
		'ind_id',
		'project_name',
		'in_area',
		'Cooperation',
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
	),
)); ?>
