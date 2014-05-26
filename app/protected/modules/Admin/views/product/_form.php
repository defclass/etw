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
		<?php echo $form->labelEx($model,'cid'); ?>
	  <?php echo $form->dropDownList($model,'cid',Classify::model()->get_classify()); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'bid'); ?>
      <?php echo $form->dropDownList($model,'bid',Brand::model()->get_brands()); ?>
		<?php echo $form->error($model,'bid'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'mid'); ?>
	  <?php echo $form->dropDownList($model,'mid',Manufacturer::model()->get_manufacturer()); ?>
		<?php echo $form->error($model,'mid'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>16,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'package'); ?>
		<?php echo $form->textField($model,'package',array('size'=>16,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'package'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'RoHS'); ?>
		<?php echo $form->textField($model,'RoHS',array('size'=>16,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'RoHS'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'datecode'); ?>
		<?php echo $form->textField($model,'datecode',array('size'=>16,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'datecode'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'direction'); ?>
		<?php echo $form->textField($model,'direction',array('size'=>16,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'direction'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'status'); ?>
      <?php echo $form->radioButtonList($model,'status',Lookup::Items('privacy'),array('separator'=>" ",'style'=>'margin-left:1em;top:1em;piding:auto;align','labelOptions'=>array('style'=>'float:none;'))); ?>
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
