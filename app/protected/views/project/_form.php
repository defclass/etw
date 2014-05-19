<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id_level'); ?>
		<?php echo $form->textField($model,'project_id_level'); ?>
		<?php echo $form->error($model,'project_id_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ind_id'); ?>
		<?php echo $form->textField($model,'ind_id'); ?>
		<?php echo $form->error($model,'ind_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_area'); ?>
		<?php echo $form->textField($model,'in_area',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'in_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cooperation'); ?>
		<?php echo $form->textField($model,'Cooperation'); ?>
		<?php echo $form->error($model,'Cooperation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'how_used'); ?>
		<?php echo $form->textField($model,'how_used',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'how_used'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'measure_id'); ?>
		<?php echo $form->textField($model,'measure_id',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'measure_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feasibility_report'); ?>
		<?php echo $form->textArea($model,'feasibility_report',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'feasibility_report'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'analysis_report'); ?>
		<?php echo $form->textArea($model,'analysis_report',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'analysis_report'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_money'); ?>
		<?php echo $form->textField($model,'total_money',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'total_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_imit'); ?>
		<?php echo $form->textField($model,'time_imit'); ?>
		<?php echo $form->error($model,'time_imit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tran_rate'); ?>
		<?php echo $form->textField($model,'tran_rate',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'tran_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'close_time'); ?>
		<?php echo $form->textField($model,'close_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'close_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_unit'); ?>
		<?php echo $form->textField($model,'min_unit'); ?>
		<?php echo $form->error($model,'min_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pub_user_id'); ?>
		<?php echo $form->textField($model,'pub_user_id',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'pub_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pub_time'); ?>
		<?php echo $form->textField($model,'pub_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pub_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_time_1'); ?>
		<?php echo $form->textField($model,'check_time_1',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'check_time_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_time_2'); ?>
		<?php echo $form->textField($model,'check_time_2',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'check_time_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_left_money'); ?>
		<?php echo $form->textField($model,'project_left_money',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'project_left_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'now_status'); ?>
		<?php echo $form->textField($model,'now_status'); ?>
		<?php echo $form->error($model,'now_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noa'); ?>
		<?php echo $form->textArea($model,'noa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'noa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ywy_name'); ?>
		<?php echo $form->textField($model,'ywy_name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'ywy_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sh_bz'); ?>
		<?php echo $form->textArea($model,'sh_bz',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sh_bz'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'khzstqj'); ?>
		<?php echo $form->textField($model,'khzstqj',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'khzstqj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shfy'); ?>
		<?php echo $form->textField($model,'shfy',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'shfy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fwfy'); ?>
		<?php echo $form->textField($model,'fwfy',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'fwfy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zhglf'); ?>
		<?php echo $form->textField($model,'zhglf',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'zhglf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month_limit'); ?>
		<?php echo $form->textField($model,'month_limit'); ?>
		<?php echo $form->error($model,'month_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wyb_select'); ?>
		<?php echo $form->textField($model,'wyb_select'); ?>
		<?php echo $form->error($model,'wyb_select'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'advance_repayment'); ?>
		<?php echo $form->textField($model,'advance_repayment'); ?>
		<?php echo $form->error($model,'advance_repayment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timing_type'); ?>
		<?php echo $form->textField($model,'timing_type'); ?>
		<?php echo $form->error($model,'timing_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_exp'); ?>
		<?php echo $form->textField($model,'is_exp',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'is_exp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
		<?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_remote'); ?>
		<?php echo $form->textField($model,'is_remote',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'is_remote'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->