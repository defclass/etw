<div class="panel close collapse" defH="100">
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sex'); ?>
		<?php echo $form->textField($model,'user_sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'real_name'); ?>
		<?php echo $form->textField($model,'real_name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_passwd'); ?>
		<?php echo $form->textField($model,'login_passwd',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_passwd'); ?>
		<?php echo $form->textField($model,'pay_passwd',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_tel'); ?>
		<?php echo $form->textField($model,'user_tel',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_phone'); ?>
		<?php echo $form->textField($model,'user_phone',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_fax'); ?>
		<?php echo $form->textField($model,'user_fax',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_address'); ?>
		<?php echo $form->textField($model,'user_address',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_add'); ?>
		<?php echo $form->textField($model,'company_add',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f_name'); ?>
		<?php echo $form->textField($model,'f_name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fuser_tel'); ?>
		<?php echo $form->textField($model,'fuser_tel',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fuser_gx'); ?>
		<?php echo $form->textField($model,'fuser_gx'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_name'); ?>
		<?php echo $form->textField($model,'s_name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suser_tel'); ?>
		<?php echo $form->textField($model,'suser_tel',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suser_gx'); ?>
		<?php echo $form->textField($model,'suser_gx'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marry_type'); ?>
		<?php echo $form->textField($model,'marry_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profession'); ?>
		<?php echo $form->textField($model,'profession',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'income_level'); ?>
		<?php echo $form->textField($model,'income_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_pic'); ?>
		<?php echo $form->textField($model,'user_pic',array('size'=>48,'maxlength'=>48)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'card_num'); ?>
		<?php echo $form->textField($model,'card_num',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'real_money'); ?>
		<?php echo $form->textField($model,'real_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'virtual_money'); ?>
		<?php echo $form->textField($model,'virtual_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit_money'); ?>
		<?php echo $form->textField($model,'credit_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'use_money'); ?>
		<?php echo $form->textField($model,'use_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_money'); ?>
		<?php echo $form->textField($model,'total_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loan_money'); ?>
		<?php echo $form->textField($model,'loan_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'delay_money'); ?>
		<?php echo $form->textField($model,'delay_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inter_money'); ?>
		<?php echo $form->textField($model,'inter_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creat_time'); ?>
		<?php echo $form->textField($model,'creat_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_time'); ?>
		<?php echo $form->textField($model,'login_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_ip'); ?>
		<?php echo $form->textField($model,'login_ip',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zchqcs'); ?>
		<?php echo $form->textField($model,'zchqcs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tqhkcs'); ?>
		<?php echo $form->textField($model,'tqhkcs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yqhkcs'); ?>
		<?php echo $form->textField($model,'yqhkcs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fbcs'); ?>
		<?php echo $form->textField($model,'fbcs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cgcs'); ?>
		<?php echo $form->textField($model,'cgcs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_level'); ?>
		<?php echo $form->textField($model,'user_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email_yn'); ?>
		<?php echo $form->textField($model,'user_email_yn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_phone_yn'); ?>
		<?php echo $form->textField($model,'user_phone_yn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sm_yn'); ?>
		<?php echo $form->textField($model,'user_sm_yn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_jc'); ?>
		<?php echo $form->textField($model,'user_jc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_jr'); ?>
		<?php echo $form->textField($model,'user_jr',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_jfb'); ?>
		<?php echo $form->textField($model,'user_jfb',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_tjr'); ?>
		<?php echo $form->textField($model,'user_tjr',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uadmin_id'); ?>
		<?php echo $form->textField($model,'uadmin_id',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uadmin_name'); ?>
		<?php echo $form->textField($model,'uadmin_name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sfgyjl'); ?>
		<?php echo $form->textField($model,'user_sfgyjl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_ly'); ?>
		<?php echo $form->textField($model,'user_ly'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_cj'); ?>
		<?php echo $form->textField($model,'user_cj'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vip_stop'); ?>
		<?php echo $form->textField($model,'vip_stop',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gm_time'); ?>
		<?php echo $form->textField($model,'gm_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gm_cishu'); ?>
		<?php echo $form->textField($model,'gm_cishu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yxyzm'); ?>
		<?php echo $form->textField($model,'yxyzm',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sm_cs'); ?>
		<?php echo $form->textField($model,'user_sm_cs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_zstx_lj'); ?>
		<?php echo $form->textField($model,'user_zstx_lj',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zdtb_blje'); ?>
		<?php echo $form->textField($model,'zdtb_blje',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mftxe'); ?>
		<?php echo $form->textField($model,'mftxe',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_activetime'); ?>
		<?php echo $form->textField($model,'user_activetime',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'special_mortgage_money'); ?>
		<?php echo $form->textField($model,'special_mortgage_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'special_wait_money'); ?>
		<?php echo $form->textField($model,'special_wait_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edit_name_times'); ?>
		<?php echo $form->textField($model,'edit_name_times'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exfinplan_surplus_money'); ?>
		<?php echo $form->textField($model,'exfinplan_surplus_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exfinplan_frozen_money'); ?>
		<?php echo $form->textField($model,'exfinplan_frozen_money',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exfinplan_take_interest'); ?>
		<?php echo $form->textField($model,'exfinplan_take_interest',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exfinplan_total_interest'); ?>
		<?php echo $form->textField($model,'exfinplan_total_interest',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_status'); ?>
		<?php echo $form->textField($model,'user_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'risk_type'); ?>
		<?php echo $form->textField($model,'risk_type',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>