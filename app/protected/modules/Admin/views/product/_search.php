<div class="panel close collapse" defH="100">
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pid'); ?>
		<?php echo $form->textField($model,'pid',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cid'); ?>
		<?php echo $form->textField($model,'cid',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bid'); ?>
		<?php echo $form->textField($model,'bid',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mid'); ?>
		<?php echo $form->textField($model,'mid',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package'); ?>
		<?php echo $form->textField($model,'package',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RoHS'); ?>
		<?php echo $form->textField($model,'RoHS',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datecode'); ?>
		<?php echo $form->textField($model,'datecode',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direction'); ?>
		<?php echo $form->textField($model,'direction',array('size'=>60,'maxlength'=>64)); ?>
	</div>

     <div class="unit">
		<?php echo $form->labelEx($model,'image_url'); ?>
		<?php echo $form->textField($model,'image_url',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'image_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>