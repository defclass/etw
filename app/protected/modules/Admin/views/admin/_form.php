<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="pageContent">

<?php $form=$this->beginWidget('ext.dwz.DwzActiveForm', array(
	'id'=>'admin-form',
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
		<?php echo $form->labelEx($model,'aid'); ?>
		<?php echo $form->textField($model,'aid',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'aid'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'login_name'); ?>
		<?php echo $form->textField($model,'login_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'login_name'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'login_passwd'); ?>
		<?php echo $form->textField($model,'login_passwd',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'login_passwd'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model,'salt',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'salt'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'admin_tel'); ?>
		<?php echo $form->textField($model,'admin_tel',array('size'=>48,'maxlength'=>48)); ?>
		<?php echo $form->error($model,'admin_tel'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'real_name'); ?>
		<?php echo $form->textField($model,'real_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'real_name'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'admin_status'); ?>
		<?php echo $form->textField($model,'admin_status'); ?>
		<?php echo $form->error($model,'admin_status'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'admin_group'); ?>
		<?php echo $form->textField($model,'admin_group',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'admin_group'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'reg_ip'); ?>
		<?php echo $form->textField($model,'reg_ip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'reg_ip'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'reg_date'); ?>
		<?php echo $form->textField($model,'reg_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'reg_date'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'last_ip'); ?>
		<?php echo $form->textField($model,'last_ip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'last_ip'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'last_visit'); ?>
		<?php echo $form->textField($model,'last_visit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'last_visit'); ?>
	</div>

	<div class="unit">
		<?php echo $form->labelEx($model,'last_location'); ?>
		<?php echo $form->textField($model,'last_location',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'last_location'); ?>
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