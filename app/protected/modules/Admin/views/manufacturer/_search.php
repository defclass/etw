<div class="panel close collapse" defH="100">
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mid'); ?>
		<?php echo $form->textField($model,'mid',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manufacturer_name'); ?>
		<?php echo $form->textField($model,'manufacturer_name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

     <div class="row">
		<?php echo $form->label($model,'company_url'); ?>
		<?php echo $form->textField($model,'company_url',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>
     

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>