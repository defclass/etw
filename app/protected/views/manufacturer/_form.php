<?php
/* @var $this ManufacturerController */
/* @var $model Manufacturer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'manufacturer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mid'); ?>
		<?php echo $form->textField($model,'mid',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'mid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturer_name'); ?>
		<?php echo $form->textField($model,'manufacturer_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'manufacturer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_url'); ?>
		<?php echo $form->textField($model,'company_url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'company_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->