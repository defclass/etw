<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Admins'=>array('index'),
				$model->aid,
			);
		?>
		<h1>查看Admin表的 #<?php echo $model->aid; ?> 记录</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
			'data'=>$model,
			//'cssFile'=>'/css/detailview/styles.css',
			'attributes'=>array(
				'aid',
		'login_name',
		'login_passwd',
		'salt',
		'email',
		'sex',
		'admin_tel',
		'real_name',
		'admin_status',
		'admin_group',
		'reg_ip',
		'reg_date',
		'last_ip',
		'last_visit',
		'last_location',
			),
		)); ?>
	</div>
</div>