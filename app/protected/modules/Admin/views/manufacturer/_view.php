<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mid), array('view','id'=>$data->mid),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer_name')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_url')); ?>:</b>
	<?php echo CHtml::encode($data->company_url); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />
</div>