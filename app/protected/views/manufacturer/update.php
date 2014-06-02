<?php
/* @var $this ManufacturerController */
/* @var $model Manufacturer */

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	$model->mid=>array('view','id'=>$model->mid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Manufacturer', 'url'=>array('index')),
	array('label'=>'Create Manufacturer', 'url'=>array('create')),
	array('label'=>'View Manufacturer', 'url'=>array('view', 'id'=>$model->mid)),
	array('label'=>'Manage Manufacturer', 'url'=>array('admin')),
);
?>

<h1>Update Manufacturer <?php echo $model->mid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>