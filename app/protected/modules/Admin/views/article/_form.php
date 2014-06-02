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
      'enctype'=>"multipart/form-data",
	)
  )); ?>
  <div class="pageFormContent" layoutH="58">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model); ?>
	<div class="unit">
      <label>文章标题</label>
      <?php echo $form->dropDownList($model,'category_id',$category); ?> 
      <?php echo $form->error($model,'cid'); ?>

	</div>


	<div class="unit">
      <?php echo $form->labelEx($model,'headline'); ?>
      <?php echo $form->textField($model,'headline',array('size'=>60,'maxlength'=>128)); ?>
      <?php echo $form->error($model,'headline'); ?>
	</div>

    <div class="unit">
      <?php echo $form->labelEx($model,'article_image'); ?>
      <?php echo $form->fileField($model,'article_image',array('size'=>60,'maxlength'=>128)); ?>
      <?php echo $form->error($model,'article_image'); ?>
	</div>


	<div class="unit">
      <?php echo $form->labelEx($model,'date'); ?>
      <?php echo $form->textField($model,'date',array('class' => 'date','size'=>10,'maxlength'=>10,'value'=>date("Y-m-d", $model->date))); ?>
      <?php echo $form->error($model,'date'); ?>
	</div>

	<div class="unit">
      <?php $upImgUrl = Yii::app()->createUrl('/Admin/Article/Upload/'); ?>
      
      <?php echo $form->labelEx($model,'content'); ?>
      <?php echo $form->textArea($model,'content',array('rows'=>20, 'cols'=>100,'class'=>'editor','upImgUrl'=>$upImgUrl,"tools"=>"mfull",'upImgExt'=>"jpg,jpeg,gif,png")); ?>
      <?php echo $form->error($model,'content'); ?>
	</div>

	<div class="unit">
      <?php echo $form->labelEx($model,'keyword'); ?>
      <?php echo $form->textField($model,'keyword',array('size'=>50,'maxlength'=>50)); ?>
      <?php echo $form->error($model,'keyword'); ?>
      (关键字用空格隔开)
	</div>

	<div class="unit">
      <?php echo $form->labelEx($model,'status'); ?>
      <?php echo $form->radioButtonList($model,'status',Lookup::items('privacy'),array('separator'=>" ",'style'=>'margin-left:1em;top:1em;piding:auto;align','labelOptions'=>array('style'=>'float:none;'))); ?>
      <?php echo $form->error($model,'status'); ?>
	</div>

  </div>
  <div class="formBar">
    <ul>
      <li>
        <div class="buttonActive">
          <div class="buttonContent">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'create' : 'save'); ?>
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
