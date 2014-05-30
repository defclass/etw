<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pid), array('view','id'=>$data->pid),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('bid')); ?>:</b>
	<?php echo CHtml::encode($data->bid); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('mid')); ?>:</b>
	<?php echo CHtml::encode($data->mid); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('package')); ?>:</b>
	<?php echo CHtml::encode($data->package); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('RoHS')); ?>:</b>
	<?php echo CHtml::encode($data->RoHS); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('datecode')); ?>:</b>
	<?php echo CHtml::encode($data->datecode); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('direction')); ?>:</b>
	<?php echo CHtml::encode($data->direction); ?>
	<br />
    	

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pid), array('view','id'=>$data->pid),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('bid')); ?>:</b>
	<?php echo CHtml::encode($data->bid); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('mid')); ?>:</b>
	<?php echo CHtml::encode($data->mid); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('package')); ?>:</b>
	<?php echo CHtml::encode($data->package); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('RoHS')); ?>:</b>
	<?php echo CHtml::encode($data->RoHS); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('datecode')); ?>:</b>
	<?php echo CHtml::encode($data->datecode); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('direction')); ?>:</b>
	<?php echo CHtml::encode($data->direction); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('image_url')); ?>:</b>
	<?php echo CHtml::encode($data->image_url); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />
	*/ ?>
</div>