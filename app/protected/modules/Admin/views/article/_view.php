<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view','id'=>$data->id),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('headline')); ?>:</b>
	<?php echo CHtml::encode($data->headline); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('isstatic')); ?>:</b>
	<?php echo CHtml::encode($data->isstatic); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('clicount')); ?>:</b>
	<?php echo CHtml::encode($data->clicount); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('keyword')); ?>:</b>
	<?php echo CHtml::encode($data->keyword); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />
	*/ ?>
</div>