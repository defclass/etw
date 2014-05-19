<?php echo CHtml::beginForm('', 'POST', array(
	'class'=>'pageForm required-validate',
	'onsubmit'=>'return iframeCallback(this,dialogAjaxDone)',
	'enctype'=>'multipart/form-data'))?>
<script type="text/javascript">
/*<![CDATA[*/
	function user_form(form){
		<?php echo $_REQUEST['target']=='navTab'? 'navTab': '$.pdialog';?>.reload(form.action, $(form).serializeArray());
		return false;
	}
/*]]>*/
</script>
<style>.alert .alertInner .msg{max-height:600px;overflow:visible;}</style>
	<div class="form pageFormContent" layoutH="55">
		<?php echo CHtml::errorSummary($model); ?>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_sex'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_sex'); ?>
			<?php echo CHtml::error($model,'user_sex'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_email'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_email'); ?>
			<?php echo CHtml::error($model,'user_email'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_name'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_name'); ?>
			<?php echo CHtml::error($model,'user_name'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'real_name'); ?>
			<?php echo CHtml::ActiveTextField($model,'real_name'); ?>
			<?php echo CHtml::error($model,'real_name'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'login_passwd'); ?>
			<?php echo CHtml::ActiveTextField($model,'login_passwd'); ?>
			<?php echo CHtml::error($model,'login_passwd'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'pay_passwd'); ?>
			<?php echo CHtml::ActiveTextField($model,'pay_passwd'); ?>
			<?php echo CHtml::error($model,'pay_passwd'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_tel'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_tel'); ?>
			<?php echo CHtml::error($model,'user_tel'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_phone'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_phone'); ?>
			<?php echo CHtml::error($model,'user_phone'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_fax'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_fax'); ?>
			<?php echo CHtml::error($model,'user_fax'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_address'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_address'); ?>
			<?php echo CHtml::error($model,'user_address'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'company_add'); ?>
			<?php echo CHtml::ActiveTextField($model,'company_add'); ?>
			<?php echo CHtml::error($model,'company_add'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'f_name'); ?>
			<?php echo CHtml::ActiveTextField($model,'f_name'); ?>
			<?php echo CHtml::error($model,'f_name'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'fuser_tel'); ?>
			<?php echo CHtml::ActiveTextField($model,'fuser_tel'); ?>
			<?php echo CHtml::error($model,'fuser_tel'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'fuser_gx'); ?>
			<?php echo CHtml::ActiveTextField($model,'fuser_gx'); ?>
			<?php echo CHtml::error($model,'fuser_gx'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'s_name'); ?>
			<?php echo CHtml::ActiveTextField($model,'s_name'); ?>
			<?php echo CHtml::error($model,'s_name'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'suser_tel'); ?>
			<?php echo CHtml::ActiveTextField($model,'suser_tel'); ?>
			<?php echo CHtml::error($model,'suser_tel'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'suser_gx'); ?>
			<?php echo CHtml::ActiveTextField($model,'suser_gx'); ?>
			<?php echo CHtml::error($model,'suser_gx'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'marry_type'); ?>
			<?php echo CHtml::ActiveTextField($model,'marry_type'); ?>
			<?php echo CHtml::error($model,'marry_type'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'profession'); ?>
			<?php echo CHtml::ActiveTextField($model,'profession'); ?>
			<?php echo CHtml::error($model,'profession'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'income_level'); ?>
			<?php echo CHtml::ActiveTextField($model,'income_level'); ?>
			<?php echo CHtml::error($model,'income_level'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_pic'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_pic'); ?>
			<?php echo CHtml::error($model,'user_pic'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'card_num'); ?>
			<?php echo CHtml::ActiveTextField($model,'card_num'); ?>
			<?php echo CHtml::error($model,'card_num'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'real_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'real_money'); ?>
			<?php echo CHtml::error($model,'real_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'virtual_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'virtual_money'); ?>
			<?php echo CHtml::error($model,'virtual_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'credit_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'credit_money'); ?>
			<?php echo CHtml::error($model,'credit_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'use_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'use_money'); ?>
			<?php echo CHtml::error($model,'use_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'total_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'total_money'); ?>
			<?php echo CHtml::error($model,'total_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'loan_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'loan_money'); ?>
			<?php echo CHtml::error($model,'loan_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'delay_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'delay_money'); ?>
			<?php echo CHtml::error($model,'delay_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'inter_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'inter_money'); ?>
			<?php echo CHtml::error($model,'inter_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'creat_time'); ?>
			<?php echo CHtml::ActiveTextField($model,'creat_time'); ?>
			<?php echo CHtml::error($model,'creat_time'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'login_time'); ?>
			<?php echo CHtml::ActiveTextField($model,'login_time'); ?>
			<?php echo CHtml::error($model,'login_time'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'login_ip'); ?>
			<?php echo CHtml::ActiveTextField($model,'login_ip'); ?>
			<?php echo CHtml::error($model,'login_ip'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'zchqcs'); ?>
			<?php echo CHtml::ActiveTextField($model,'zchqcs'); ?>
			<?php echo CHtml::error($model,'zchqcs'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'tqhkcs'); ?>
			<?php echo CHtml::ActiveTextField($model,'tqhkcs'); ?>
			<?php echo CHtml::error($model,'tqhkcs'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'yqhkcs'); ?>
			<?php echo CHtml::ActiveTextField($model,'yqhkcs'); ?>
			<?php echo CHtml::error($model,'yqhkcs'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'fbcs'); ?>
			<?php echo CHtml::ActiveTextField($model,'fbcs'); ?>
			<?php echo CHtml::error($model,'fbcs'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'cgcs'); ?>
			<?php echo CHtml::ActiveTextField($model,'cgcs'); ?>
			<?php echo CHtml::error($model,'cgcs'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_type'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_type'); ?>
			<?php echo CHtml::error($model,'user_type'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_level'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_level'); ?>
			<?php echo CHtml::error($model,'user_level'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_email_yn'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_email_yn'); ?>
			<?php echo CHtml::error($model,'user_email_yn'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_phone_yn'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_phone_yn'); ?>
			<?php echo CHtml::error($model,'user_phone_yn'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_sm_yn'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_sm_yn'); ?>
			<?php echo CHtml::error($model,'user_sm_yn'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_jc'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_jc'); ?>
			<?php echo CHtml::error($model,'user_jc'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_jr'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_jr'); ?>
			<?php echo CHtml::error($model,'user_jr'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_jfb'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_jfb'); ?>
			<?php echo CHtml::error($model,'user_jfb'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_tjr'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_tjr'); ?>
			<?php echo CHtml::error($model,'user_tjr'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'uadmin_id'); ?>
			<?php echo CHtml::ActiveTextField($model,'uadmin_id'); ?>
			<?php echo CHtml::error($model,'uadmin_id'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'uadmin_name'); ?>
			<?php echo CHtml::ActiveTextField($model,'uadmin_name'); ?>
			<?php echo CHtml::error($model,'uadmin_name'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_sfgyjl'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_sfgyjl'); ?>
			<?php echo CHtml::error($model,'user_sfgyjl'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_ly'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_ly'); ?>
			<?php echo CHtml::error($model,'user_ly'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_cj'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_cj'); ?>
			<?php echo CHtml::error($model,'user_cj'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'vip_stop'); ?>
			<?php echo CHtml::ActiveTextField($model,'vip_stop'); ?>
			<?php echo CHtml::error($model,'vip_stop'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'gm_time'); ?>
			<?php echo CHtml::ActiveTextField($model,'gm_time'); ?>
			<?php echo CHtml::error($model,'gm_time'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'gm_cishu'); ?>
			<?php echo CHtml::ActiveTextField($model,'gm_cishu'); ?>
			<?php echo CHtml::error($model,'gm_cishu'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'yxyzm'); ?>
			<?php echo CHtml::ActiveTextField($model,'yxyzm'); ?>
			<?php echo CHtml::error($model,'yxyzm'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_sm_cs'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_sm_cs'); ?>
			<?php echo CHtml::error($model,'user_sm_cs'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_zstx_lj'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_zstx_lj'); ?>
			<?php echo CHtml::error($model,'user_zstx_lj'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'zdtb_blje'); ?>
			<?php echo CHtml::ActiveTextField($model,'zdtb_blje'); ?>
			<?php echo CHtml::error($model,'zdtb_blje'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'mftxe'); ?>
			<?php echo CHtml::ActiveTextField($model,'mftxe'); ?>
			<?php echo CHtml::error($model,'mftxe'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_activetime'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_activetime'); ?>
			<?php echo CHtml::error($model,'user_activetime'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'special_mortgage_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'special_mortgage_money'); ?>
			<?php echo CHtml::error($model,'special_mortgage_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'special_wait_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'special_wait_money'); ?>
			<?php echo CHtml::error($model,'special_wait_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'edit_name_times'); ?>
			<?php echo CHtml::ActiveTextField($model,'edit_name_times'); ?>
			<?php echo CHtml::error($model,'edit_name_times'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'exfinplan_surplus_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'exfinplan_surplus_money'); ?>
			<?php echo CHtml::error($model,'exfinplan_surplus_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'exfinplan_frozen_money'); ?>
			<?php echo CHtml::ActiveTextField($model,'exfinplan_frozen_money'); ?>
			<?php echo CHtml::error($model,'exfinplan_frozen_money'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'exfinplan_take_interest'); ?>
			<?php echo CHtml::ActiveTextField($model,'exfinplan_take_interest'); ?>
			<?php echo CHtml::error($model,'exfinplan_take_interest'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'exfinplan_total_interest'); ?>
			<?php echo CHtml::ActiveTextField($model,'exfinplan_total_interest'); ?>
			<?php echo CHtml::error($model,'exfinplan_total_interest'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'user_status'); ?>
			<?php echo CHtml::ActiveTextField($model,'user_status'); ?>
			<?php echo CHtml::error($model,'user_status'); ?>
		</div>

		<div class="row">
			<?php echo CHtml::ActiveLabelEx($model,'risk_type'); ?>
			<?php echo CHtml::ActiveTextField($model,'risk_type'); ?>
			<?php echo CHtml::error($model,'risk_type'); ?>
		</div>

			</div>
	<div class="formBar">
		<ul>
			<li><div class="buttonActive"><div class="buttonContent">
				<button type="submit"><?php echo $model->isNewRecord ? '创建' : '保存'; ?>
</button>
			</div></div></li>
			<li>
				<div class="button"><div class="buttonContent">
					<button onclick="<?php echo $_REQUEST['target']=='navTab'? 'navTab.closeCurrentTab()': '$.pdialog.closeCurrent()';?>" type="Button">取消</button>
				</div></div>
			</li>
		</ul>
	</div>
<?php echo CHtml::endForm() ?>
</div>