<?php
   /* @var $this CategoryController */
   /* @var $model Category */
   /* @var $form CActiveForm */
   ?>

<div class="pageContent">

  <?php $form=$this->beginWidget('ext.dwz.DwzActiveForm', array(
  'id'=>'category-form',
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
      <?php echo $form->labelEx($model,'name'); ?>
      <?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30)); ?>
      <?php echo $form->error($model,'name'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'fid'); ?>
      <?php echo $form->dropDownList($model,'fid',$this->get_category()); ?>
      <?php echo $form->error($model,'fid'); ?>
    </div>

    <div class="unit">
      <?php echo $form->labelEx($model,'issingle'); ?>
      <?php echo $form->radioButtonList($model,'issingle',Lookup::items('bool'),array('separator'=>" ",'style'=>'margin-left:1em;top:1em;piding:auto;align','labelOptions'=>array('style'=>'float:none;'))); ?>
      <?php echo $form->error($model,'issingle'); ?>
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
