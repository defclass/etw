<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="pageContent">

<?php $form=$this->beginWidget('ext.dwz.DwzActiveForm', array(
	'id'=>'article-form',
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
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'headline'); ?>
		<?php echo $form->textField($model,'headline',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'headline'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'isstatic'); ?>
		<?php echo $form->textField($model,'isstatic'); ?>
		<?php echo $form->error($model,'isstatic'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'clicount'); ?>
		<?php echo $form->textField($model,'clicount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'clicount'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
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