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
      <?php echo $form->labelEx($model,'login_name'); ?>
      <?php echo $form->textField($model,'login_name',array('size'=>16,'maxlength'=>32)); ?>
      <?php echo $form->error($model,'login_name'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'login_passwd'); ?>
      <?php echo $form->PasswordField($model,'login_passwd',array('size'=>16,'maxlength'=>40)); ?>
      <?php echo $form->error($model,'login_passwd'); ?>
    </div>


    <div class="unit">
      <?php echo $form->labelEx($model,'email'); ?>
      <?php echo $form->textField($model,'email',array('size'=>16,'maxlength'=>32)); ?>
      <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'sex'); ?>
      <?php echo $form->radioButtonList($model,'sex',Lookup::items('sex'),array('separator'=>" ",'style'=>'margin-left:1em;top:1em;piding:auto;align','labelOptions'=>array('style'=>'float:none;'))); ?>
      <?php echo $form->error($model,'sex'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'admin_tel'); ?>
      <?php echo $form->textField($model,'admin_tel',array('size'=>11,'maxlength'=>16)); ?>
      <?php echo $form->error($model,'admin_tel'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'real_name'); ?>
      <?php echo $form->textField($model,'real_name',array('size'=>16,'maxlength'=>32)); ?>
      <?php echo $form->error($model,'real_name'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'admin_status'); ?>
      <?php echo $form->radioButtonList($model,'admin_status',Lookup::items('admin_status'),array('separator'=>" ",'style'=>'margin-left:1em;top:1em;piding:auto;align','labelOptions'=>array('style'=>'float:none;'))); ?>
      <?php echo $form->error($model,'admin_status'); ?>
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
