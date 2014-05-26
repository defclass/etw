<?php
/* @var $this ClassifyController */
/* @var $model Classify */
/* @var $form CActiveForm */
?>

<div class="pageContent">

<?php $form=$this->beginWidget('ext.dwz.DwzActiveForm', array(
	'id'=>'classify-form',
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
		<?php echo $form->labelEx($model,'classify_name'); ?>
		<?php echo $form->textField($model,'classify_name',array('size'=>16,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'classify_name'); ?>
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