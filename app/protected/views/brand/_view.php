<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bid), array('view','id'=>$data->bid),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_name')); ?>:</b>
	<?php echo CHtml::encode($data->brand_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('big_logo')); ?>:</b>
	<?php echo CHtml::encode($data->big_logo); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('small_logo')); ?>:</b>
	<?php echo CHtml::encode($data->small_logo); ?>
	<br />
</div>