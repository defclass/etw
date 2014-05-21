	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'admin-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'aid',
		'login_name',
		'login_passwd',
		'salt',
		'email',
		'sex',
		/*
		'admin_tel',
		'real_name',
		'admin_status',
		'admin_group',
		'reg_ip',
		'reg_date',
		'last_ip',
		'last_visit',
		'last_location',
		*/
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>