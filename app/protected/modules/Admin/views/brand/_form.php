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
        'enctype'=>"multipart/form-data",
	)
)); ?>
    <div class="pageFormContent" layoutH="58">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="unit">
		<?php echo $form->labelEx($model,'brand_name'); ?>
		<?php echo $form->textField($model,'brand_name',array('size'=>16,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'brand_name'); ?>
	</div>

    <div class="unit">
      <?php echo $form->labelEx($model,'classify_id'); ?>
	  <?php echo $form->dropDownList($model,'classify_id',Classify::model()->get_classify()); ?>
      <?php echo $form->error($model,'classify_id'); ?>
	</div>


	<div class="unit">
    <?php echo $form->labelEx($model,'company_url'); ?>
		<?php echo $form->textField($model,'company_url',array('size'=>16,'maxlength'=>128)); ?>(不要填http://)
		<?php echo $form->error($model,'company_url'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>20, 'cols'=>100,'class'=>'editor',"tools"=>"mfull",'upImgExt'=>"jpg,jpeg,gif,png")); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="unit">
<?php echo $form->labelEx($model,'logo'); ?>：
		<?php echo $form->fileField($model,'logo',array('size'=>16,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'logo'); ?>
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
