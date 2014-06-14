<div class="detail_navigation">
  <p><a href="<?php echo $this->createUrl('/Site/Index'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <?php echo Yii::t('main','SendRFQ'); ?></a> </p>
  
</div>
<!--右侧内容不同区域-->
<div class="list_detail f_left">
  <p>
    <?php echo Yii::t('site','Please enter the quantity you need. If you have more than one component are looking for, please add additional components to your quote request form. Then fill in your contact information and click on submit an application, our sales representative will contact you as soon as possible, including price and delivery time. If you need help, please send an E-MAIL to info@barum-hk.com'); ?>
  </p>
  <p>
    * <?php echo Yii::t('site','Mark is required, please fill out accurate'); ?>。
  </p>

  <?php if(Yii::app()->user->hasFlash('success')){ ?>
    <div class="order_success">
      <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
    <br />
  <?php } ?>

  
  <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
      'class'=>'pageForm required-validate',
	)
  )); ?>
  <table id="parts" width="600px" cellpadding="6" cellspacing="0">
    <?php
    foreach($order_details as $od){
      echo $form->errorSummary($od);
    }
    ?>
    <?php echo $form->errorSummary($order); ?>
    <?php echo $form->errorSummary($code); ?>
    <tbody>
      <tr>
      <td class="tdtitle"><?php echo Yii::t('site','Model');?> </td>
      <td class="tdtitle"><?php echo Yii::t('site','Quantity');?> </td>
      <td class="tdtitle"><?php echo Yii::t('site','Manufacturer');?></td>
      <td class="tdtitle"><?php echo Yii::t('site','Price');?> (USD)</td>
      <td class="tdtitle">Action</td>
    </tr>
    <tr>
      <td>
        <input id="quotationItem[0].ModelNumber" name="OrderDetail[0][model]" type="text" class="inputbox required" size="12" maxlength="40" value=""></td>
      <td><input id="quotationItem[0].Quantity" name="OrderDetail[0][quantity]" type="text" class="inputbox required digits" size="12" maxlength="40"></td>
      <td><input id="quotationItem[0].Manufacturer" name="OrderDetail[0][brand]" type="text" class="inputbox" size="15" maxlength="80" value=""> </td>
      <td><input id="quotationItem[0].UnitPrice" name="OrderDetail[0][price]" type="text" class="inputbox number" size="15" maxlength="80">  </td>
      <td>
        <span> ---- </span>
        
      </td>
    </tr>
    </tbody></table>
  <input value="<?php echo Yii::t('site','Add');?>" class="button" id="addRow" type="button">
  <p></p>
  <hr size="1" style="color:#DAE1E7">
  <table width="650" cellpadding="6" cellspacing="0">
    <tbody><tr>
      <td style="text-align: right;"><?php echo Yii::t('site','Contact');?> <!--895330634 -->:  </td>
      <td><input name="Order[contact_person]" type="text" class="inputbox required" id="quotation.Contact" size="20" maxlength="20" value=""> *</td>
      <td style="text-align: right;"><?php echo Yii::t('site','Company');?> :  </td>
      <td><input name="Order[company_name]" type="text" class="inputbox" id="quotation.Company" size="20" maxlength="50" value=""></td>
    </tr>
    <tr>
      <td style="text-align: right;">E-mail :  </td>
      <td colspan="3">
        <input name="Order[email]" type="text" class="inputbox required email" id="quotation.Email" size="20" maxlength="60" value=""> * <span id="emailTip" style="color:Red"></span> 
      </td>
    </tr>
    <tr>
      <td style="text-align: right;"><?php echo Yii::t('site','Telephone');?> : </td>
      <td colspan="3">
        <input type="text" class="inputbox" id="quotation.Tel" name="Order[tel]" size="20" maxlength="40" value=""> &nbsp;(包括国家代码)
      </td>
    </tr>
   
    <tr>
      <td valign="top" style="text-align: right;">
        <?php echo Yii::t('site','Content');?> : 
      </td>
      <td colspan="3">
        <textarea name="Order[inquiry_content]" cols="71" rows="3" class="inputbox" style="width:450px"></textarea>
      </td>
    </tr>
    <tr>
      <td style="text-align: right;">
        <?php echo Yii::t('site','Captcha');?>:
      </td>
      <td height="30" colspan="3">
        <?php echo $form->textField($code,'code',array('size'=>4,'maxlength'=>5,'value'=>'','class'=>"inputbox")); ?>
        <?php $this->widget('CCaptcha',array(
          'showRefreshButton'=>true,
          'clickableImage'=>true,
          'buttonLabel'=>"Can not see?",
          'imageOptions'=>array(
            'alt'=>Yii::t('site','Change Pic'),
            'title'=>Yii::t('site','Click for Pic'),
            'style'=>'cursor:pointer',
            //'padding'=>'2')
          )
        )); ?>
		<?php echo $form->error($code,'code'); ?>
        

      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      
      <td colspan="3">
        <?php echo CHtml::submitButton(Yii::t('site','Submit'),array('id'=>"btnsubmit", 'name'=>"btnsubmit", 'class'=>"button")); ?>
        <span id="submitTip" style="display:none"> <img src="/Themes/StyleBarum/images/common/grid-loading.gif"> *The form is being submitted, please wait a moment!</span></td>
    </tr>
    </tbody></table>
  <?php $this->endWidget(); ?>
    
</div>
<script>
 var currentInt = 0;
 if(currentInt<0){
   currentInt=0;
 }
 else{
   currentInt=currentInt;
 }
 $(document).ready(function () {
   $('#addRow').click(function () {
     currentInt++;
     $("#parts").append('<tr><td><input name="OrderDetail[' + currentInt + '][model]" type="text" class="inputbox required" size="12" maxlength="40" /></td>' +
                        '<td><input name="OrderDetail[' + currentInt + '][quantity]" type="text" class="inputbox required number" size="12" maxlength="40" /></td>' +
                        '<td><input name="OrderDetail[' + currentInt + '][brand]" type="text" class="inputbox" size="15" maxlength="80" /></td>' +
                        '<td><input name="OrderDetail[' + currentInt + '][price]" type="text" class="inputbox" size="15" maxlength="80" /></td>' + 
                        '<td><input value="<?php echo Yii::t('site','Delete');?>" class="button" onclick="deleteRow(this);" type="button" /></td></tr>');
   });
 });
 function deleteRow(row) {

   //       $(row).parent().parent().remove();

   var parentTr = $(row).parent().parent();
   var inputs = parentTr.find("input[type='text']");
   inputs.each(function () {
     $(this).val("");
   });
   parentTr.remove();

 }
</script>
