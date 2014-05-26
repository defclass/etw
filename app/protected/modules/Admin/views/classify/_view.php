<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cid), array('view','id'=>$data->cid),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classify_name')); ?>:</b>
	<?php echo CHtml::encode($data->classify_name); ?>
	<br />
</div>