<?php
/* @var $this ManufacturerController */
/* @var $model Manufacturer */

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	$model->mid,
);

$this->menu=array(
	array('label'=>'List Manufacturer', 'url'=>array('index')),
	array('label'=>'Create Manufacturer', 'url'=>array('create')),
	array('label'=>'Update Manufacturer', 'url'=>array('update', 'id'=>$model->mid)),
	array('label'=>'Delete Manufacturer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Manufacturer', 'url'=>array('admin')),
);
?>

<h1>View Manufacturer #<?php echo $model->mid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mid',
		'manufacturer_name',
		'company_url',
		'comment',
	),
)); ?>
