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
      <?php echo $form->labelEx($model,'username'); ?>
      <?php echo $form->textField($model,'username',array('size'=>16,'maxlength'=>32,'value'=>Yii::app()->user->login_name,'readOnly'=>true,)); ?>
      <?php echo $form->error($model,'username'); ?>
    </div> 

    <div class="unit">
      <?php echo $form->labelEx($model,'password'); ?>
      <?php echo $form->PasswordField($model,'password',array('size'=>16,'maxlength'=>32)); ?>
      <?php echo $form->error($model,'password'); ?>
    </div> 
    <div class="unit">
      <?php echo $form->labelEx($model,'new_pass'); ?>
      <?php echo $form->PasswordField($model,'new_pass',array('size'=>16,'maxlength'=>40)); ?>
      <?php echo $form->error($model,'new_pass'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'repeat_pass'); ?>
      <?php echo $form->PasswordField($model,'repeat_pass',array('size'=>16,'maxlength'=>32)); ?>
      <?php echo $form->error($model,'repeat_pass'); ?>
    </div>

  </div>
  <div class="formBar">
    <ul>
      <li>
        <div class="buttonActive">
          <div class="buttonContent">
            <?php echo CHtml::submitButton('修改'); ?>
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
