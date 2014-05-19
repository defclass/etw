<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view','id'=>$data->user_id),array('target'=>'dialog')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sex')); ?>:</b>
	<?php echo CHtml::encode($data->user_sex); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('real_name')); ?>:</b>
	<?php echo CHtml::encode($data->real_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('login_passwd')); ?>:</b>
	<?php echo CHtml::encode($data->login_passwd); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_passwd')); ?>:</b>
	<?php echo CHtml::encode($data->pay_passwd); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_tel')); ?>:</b>
	<?php echo CHtml::encode($data->user_tel); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_phone')); ?>:</b>
	<?php echo CHtml::encode($data->user_phone); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_fax')); ?>:</b>
	<?php echo CHtml::encode($data->user_fax); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_address); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('company_add')); ?>:</b>
	<?php echo CHtml::encode($data->company_add); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('f_name')); ?>:</b>
	<?php echo CHtml::encode($data->f_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('fuser_tel')); ?>:</b>
	<?php echo CHtml::encode($data->fuser_tel); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('fuser_gx')); ?>:</b>
	<?php echo CHtml::encode($data->fuser_gx); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('s_name')); ?>:</b>
	<?php echo CHtml::encode($data->s_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('suser_tel')); ?>:</b>
	<?php echo CHtml::encode($data->suser_tel); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('suser_gx')); ?>:</b>
	<?php echo CHtml::encode($data->suser_gx); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('marry_type')); ?>:</b>
	<?php echo CHtml::encode($data->marry_type); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('profession')); ?>:</b>
	<?php echo CHtml::encode($data->profession); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('income_level')); ?>:</b>
	<?php echo CHtml::encode($data->income_level); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pic')); ?>:</b>
	<?php echo CHtml::encode($data->user_pic); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('card_num')); ?>:</b>
	<?php echo CHtml::encode($data->card_num); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('real_money')); ?>:</b>
	<?php echo CHtml::encode($data->real_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('virtual_money')); ?>:</b>
	<?php echo CHtml::encode($data->virtual_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_money')); ?>:</b>
	<?php echo CHtml::encode($data->credit_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('use_money')); ?>:</b>
	<?php echo CHtml::encode($data->use_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_money')); ?>:</b>
	<?php echo CHtml::encode($data->total_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('loan_money')); ?>:</b>
	<?php echo CHtml::encode($data->loan_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('delay_money')); ?>:</b>
	<?php echo CHtml::encode($data->delay_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('inter_money')); ?>:</b>
	<?php echo CHtml::encode($data->inter_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('creat_time')); ?>:</b>
	<?php echo CHtml::encode($data->creat_time); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('login_time')); ?>:</b>
	<?php echo CHtml::encode($data->login_time); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('login_ip')); ?>:</b>
	<?php echo CHtml::encode($data->login_ip); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('zchqcs')); ?>:</b>
	<?php echo CHtml::encode($data->zchqcs); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('tqhkcs')); ?>:</b>
	<?php echo CHtml::encode($data->tqhkcs); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('yqhkcs')); ?>:</b>
	<?php echo CHtml::encode($data->yqhkcs); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('fbcs')); ?>:</b>
	<?php echo CHtml::encode($data->fbcs); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('cgcs')); ?>:</b>
	<?php echo CHtml::encode($data->cgcs); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_level')); ?>:</b>
	<?php echo CHtml::encode($data->user_level); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email_yn')); ?>:</b>
	<?php echo CHtml::encode($data->user_email_yn); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_phone_yn')); ?>:</b>
	<?php echo CHtml::encode($data->user_phone_yn); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sm_yn')); ?>:</b>
	<?php echo CHtml::encode($data->user_sm_yn); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_jc')); ?>:</b>
	<?php echo CHtml::encode($data->user_jc); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_jr')); ?>:</b>
	<?php echo CHtml::encode($data->user_jr); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_jfb')); ?>:</b>
	<?php echo CHtml::encode($data->user_jfb); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_tjr')); ?>:</b>
	<?php echo CHtml::encode($data->user_tjr); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('uadmin_id')); ?>:</b>
	<?php echo CHtml::encode($data->uadmin_id); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('uadmin_name')); ?>:</b>
	<?php echo CHtml::encode($data->uadmin_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sfgyjl')); ?>:</b>
	<?php echo CHtml::encode($data->user_sfgyjl); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_ly')); ?>:</b>
	<?php echo CHtml::encode($data->user_ly); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_cj')); ?>:</b>
	<?php echo CHtml::encode($data->user_cj); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('vip_stop')); ?>:</b>
	<?php echo CHtml::encode($data->vip_stop); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('gm_time')); ?>:</b>
	<?php echo CHtml::encode($data->gm_time); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('gm_cishu')); ?>:</b>
	<?php echo CHtml::encode($data->gm_cishu); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('yxyzm')); ?>:</b>
	<?php echo CHtml::encode($data->yxyzm); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sm_cs')); ?>:</b>
	<?php echo CHtml::encode($data->user_sm_cs); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_zstx_lj')); ?>:</b>
	<?php echo CHtml::encode($data->user_zstx_lj); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('zdtb_blje')); ?>:</b>
	<?php echo CHtml::encode($data->zdtb_blje); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('mftxe')); ?>:</b>
	<?php echo CHtml::encode($data->mftxe); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_activetime')); ?>:</b>
	<?php echo CHtml::encode($data->user_activetime); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('special_mortgage_money')); ?>:</b>
	<?php echo CHtml::encode($data->special_mortgage_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('special_wait_money')); ?>:</b>
	<?php echo CHtml::encode($data->special_wait_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('edit_name_times')); ?>:</b>
	<?php echo CHtml::encode($data->edit_name_times); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('exfinplan_surplus_money')); ?>:</b>
	<?php echo CHtml::encode($data->exfinplan_surplus_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('exfinplan_frozen_money')); ?>:</b>
	<?php echo CHtml::encode($data->exfinplan_frozen_money); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('exfinplan_take_interest')); ?>:</b>
	<?php echo CHtml::encode($data->exfinplan_take_interest); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('exfinplan_total_interest')); ?>:</b>
	<?php echo CHtml::encode($data->exfinplan_total_interest); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_status')); ?>:</b>
	<?php echo CHtml::encode($data->user_status); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('risk_type')); ?>:</b>
	<?php echo CHtml::encode($data->risk_type); ?>
	<br />
	*/ ?>
</div>