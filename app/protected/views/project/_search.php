<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_id_level'); ?>
		<?php echo $form->textField($model,'project_id_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ind_id'); ?>
		<?php echo $form->textField($model,'ind_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_area'); ?>
		<?php echo $form->textField($model,'in_area',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cooperation'); ?>
		<?php echo $form->textField($model,'Cooperation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'how_used'); ?>
		<?php echo $form->textField($model,'how_used',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'measure_id'); ?>
		<?php echo $form->textField($model,'measure_id',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feasibility_report'); ?>
		<?php echo $form->textArea($model,'feasibility_report',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'analysis_report'); ?>
		<?php echo $form->textArea($model,'analysis_report',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_money'); ?>
		<?php echo $form->textField($model,'total_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_imit'); ?>
		<?php echo $form->textField($model,'time_imit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tran_rate'); ?>
		<?php echo $form->textField($model,'tran_rate',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'close_time'); ?>
		<?php echo $form->textField($model,'close_time',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_unit'); ?>
		<?php echo $form->textField($model,'min_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pub_user_id'); ?>
		<?php echo $form->textField($model,'pub_user_id',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pub_time'); ?>
		<?php echo $form->textField($model,'pub_time',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'check_time_1'); ?>
		<?php echo $form->textField($model,'check_time_1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'check_time_2'); ?>
		<?php echo $form->textField($model,'check_time_2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_left_money'); ?>
		<?php echo $form->textField($model,'project_left_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'now_status'); ?>
		<?php echo $form->textField($model,'now_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noa'); ?>
		<?php echo $form->textArea($model,'noa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ywy_name'); ?>
		<?php echo $form->textField($model,'ywy_name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sh_bz'); ?>
		<?php echo $form->textArea($model,'sh_bz',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'khzstqj'); ?>
		<?php echo $form->textField($model,'khzstqj',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shfy'); ?>
		<?php echo $form->textField($model,'shfy',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fwfy'); ?>
		<?php echo $form->textField($model,'fwfy',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zhglf'); ?>
		<?php echo $form->textField($model,'zhglf',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'month_limit'); ?>
		<?php echo $form->textField($model,'month_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wyb_select'); ?>
		<?php echo $form->textField($model,'wyb_select'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'advance_repayment'); ?>
		<?php echo $form->textField($model,'advance_repayment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timing_type'); ?>
		<?php echo $form->textField($model,'timing_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_exp'); ?>
		<?php echo $form->textField($model,'is_exp',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_remote'); ?>
		<?php echo $form->textField($model,'is_remote',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->