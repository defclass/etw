	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'user-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'user_id',
		'user_sex',
		'user_email',
		'user_name',
		'real_name',
		'login_passwd',
		/*
		'pay_passwd',
		'user_tel',
		'user_phone',
		'user_fax',
		'user_address',
		'company_add',
		'f_name',
		'fuser_tel',
		'fuser_gx',
		's_name',
		'suser_tel',
		'suser_gx',
		'marry_type',
		'profession',
		'income_level',
		'user_pic',
		'card_num',
		'real_money',
		'virtual_money',
		'credit_money',
		'use_money',
		'total_money',
		'loan_money',
		'delay_money',
		'inter_money',
		'creat_time',
		'login_time',
		'login_ip',
		'zchqcs',
		'tqhkcs',
		'yqhkcs',
		'fbcs',
		'cgcs',
		'user_type',
		'user_level',
		'user_email_yn',
		'user_phone_yn',
		'user_sm_yn',
		'user_jc',
		'user_jr',
		'user_jfb',
		'user_tjr',
		'uadmin_id',
		'uadmin_name',
		'user_sfgyjl',
		'user_ly',
		'user_cj',
		'vip_stop',
		'gm_time',
		'gm_cishu',
		'yxyzm',
		'user_sm_cs',
		'user_zstx_lj',
		'zdtb_blje',
		'mftxe',
		'user_activetime',
		'special_mortgage_money',
		'special_wait_money',
		'edit_name_times',
		'exfinplan_surplus_money',
		'exfinplan_frozen_money',
		'exfinplan_take_interest',
		'exfinplan_total_interest',
		'user_status',
		'risk_type',
		*/
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>