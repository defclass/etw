<?php
/* @var $this BrandController */
/* @var $model Brand */
/* @var $form CActiveForm */
?>

<div class="pageContent">

<?php $form=$this->beginWidget('ext.dwz.DwzActiveForm', array(
	'id'=>'brand-form',
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
		<?php echo $form->labelEx($model,'bid'); ?>
		<?php echo $form->textField($model,'bid',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'bid'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'brand_name'); ?>
		<?php echo $form->textField($model,'brand_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'brand_name'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'big_logo'); ?>
		<?php echo $form->textField($model,'big_logo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'big_logo'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'small_logo'); ?>
		<?php echo $form->textField($model,'small_logo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'small_logo'); ?>
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