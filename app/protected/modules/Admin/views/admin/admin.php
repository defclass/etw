<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/Admin/Admin/Create" target="dialog" width='800' height='600'><span>添加</span></a></li>
    </ul>
  </div>
<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'admin-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			/* 'aid', */
		'login_name',
		'email',
		'sex',
		'admin_tel',
        array(
          'name' => 'real_name',
          'value' => ' () ',
         ),

        array(
          'name' => 'reg_date',
          'value' => 'date("Y-m-d H:i:s",$data->reg_date)',
         ),
         array(
          'name' => 'admin_group',
          'value' => 'Lookup::item("admin_group",$data->admin_group)',
         ),
         array(
          'name' => 'admin_status',
          'value' => 'Lookup::item("admin_status",$data->admin_status)',
      ),
		/*
		'salt',
		'login_passwd',
		'reg_ip',
		'last_ip',
		'last_visit',
		'last_location',
		*/
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>