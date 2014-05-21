<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('aid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->aid), array('view','id'=>$data->aid),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_name')); ?>:</b>
	<?php echo CHtml::encode($data->login_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('login_passwd')); ?>:</b>
	<?php echo CHtml::encode($data->login_passwd); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('salt')); ?>:</b>
	<?php echo CHtml::encode($data->salt); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_tel')); ?>:</b>
	<?php echo CHtml::encode($data->admin_tel); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('real_name')); ?>:</b>
	<?php echo CHtml::encode($data->real_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_status')); ?>:</b>
	<?php echo CHtml::encode($data->admin_status); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_group')); ?>:</b>
	<?php echo CHtml::encode($data->admin_group); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_ip')); ?>:</b>
	<?php echo CHtml::encode($data->reg_ip); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_date')); ?>:</b>
	<?php echo CHtml::encode($data->reg_date); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_ip')); ?>:</b>
	<?php echo CHtml::encode($data->last_ip); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_visit')); ?>:</b>
	<?php echo CHtml::encode($data->last_visit); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_location')); ?>:</b>
	<?php echo CHtml::encode($data->last_location); ?>
	<br />
	*/ ?>
</div>