<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->project_id), array('view', 'id'=>$data->project_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id_level')); ?>:</b>
	<?php echo CHtml::encode($data->project_id_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ind_id')); ?>:</b>
	<?php echo CHtml::encode($data->ind_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_area')); ?>:</b>
	<?php echo CHtml::encode($data->in_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cooperation')); ?>:</b>
	<?php echo CHtml::encode($data->Cooperation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_used')); ?>:</b>
	<?php echo CHtml::encode($data->how_used); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('measure_id')); ?>:</b>
	<?php echo CHtml::encode($data->measure_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feasibility_report')); ?>:</b>
	<?php echo CHtml::encode($data->feasibility_report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('analysis_report')); ?>:</b>
	<?php echo CHtml::encode($data->analysis_report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_money')); ?>:</b>
	<?php echo CHtml::encode($data->total_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_imit')); ?>:</b>
	<?php echo CHtml::encode($data->time_imit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tran_rate')); ?>:</b>
	<?php echo CHtml::encode($data->tran_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('close_time')); ?>:</b>
	<?php echo CHtml::encode($data->close_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_unit')); ?>:</b>
	<?php echo CHtml::encode($data->min_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pub_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->pub_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pub_time')); ?>:</b>
	<?php echo CHtml::encode($data->pub_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_time_1')); ?>:</b>
	<?php echo CHtml::encode($data->check_time_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_time_2')); ?>:</b>
	<?php echo CHtml::encode($data->check_time_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_left_money')); ?>:</b>
	<?php echo CHtml::encode($data->project_left_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('now_status')); ?>:</b>
	<?php echo CHtml::encode($data->now_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noa')); ?>:</b>
	<?php echo CHtml::encode($data->noa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ywy_name')); ?>:</b>
	<?php echo CHtml::encode($data->ywy_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sh_bz')); ?>:</b>
	<?php echo CHtml::encode($data->sh_bz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('khzstqj')); ?>:</b>
	<?php echo CHtml::encode($data->khzstqj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shfy')); ?>:</b>
	<?php echo CHtml::encode($data->shfy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fwfy')); ?>:</b>
	<?php echo CHtml::encode($data->fwfy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zhglf')); ?>:</b>
	<?php echo CHtml::encode($data->zhglf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month_limit')); ?>:</b>
	<?php echo CHtml::encode($data->month_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wyb_select')); ?>:</b>
	<?php echo CHtml::encode($data->wyb_select); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('advance_repayment')); ?>:</b>
	<?php echo CHtml::encode($data->advance_repayment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timing_type')); ?>:</b>
	<?php echo CHtml::encode($data->timing_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_exp')); ?>:</b>
	<?php echo CHtml::encode($data->is_exp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_remote')); ?>:</b>
	<?php echo CHtml::encode($data->is_remote); ?>
	<br />

	*/ ?>

</div>