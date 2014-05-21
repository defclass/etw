<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mid), array('view','id'=>$data->mid),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer_name')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer_name); ?>
	<br />
</div>