<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="pageContent">

<?php $form=$this->beginWidget('ext.dwz.DwzActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
	    'class'=>'pageForm required-validate',
	    'onsubmit'=>'return iframeCallback(this,dialogAjaxDone)',
	)
)); ?>
    <div class="pageFormContent" layoutH="58">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="unit">
		<?php echo $form->labelEx($model,'pid'); ?>
		<?php echo $form->textField($model,'pid',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'pid'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'classify'); ?>
		<?php echo $form->textField($model,'classify',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'classify'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'brand'); ?>
		<?php echo $form->textField($model,'brand',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'brand'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'manufacturer'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'package'); ?>
		<?php echo $form->textField($model,'package',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'package'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'RoHS'); ?>
		<?php echo $form->textField($model,'RoHS',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RoHS'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'datecode'); ?>
		<?php echo $form->textField($model,'datecode',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'datecode'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'direction'); ?>
		<?php echo $form->textField($model,'direction',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'direction'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

    </div>
	<div class="formBar">
        <ul>
            <li>
                <div class="buttonActive">
                    <div class="buttonContent">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="button">
                    <div class="buttonContent">
                        <button type="button" class="close">取消</button>
                    </div>
                </div>
            </li>
        </ul>

	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->