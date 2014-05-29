<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/Admin/Brand/Create" target="dialog" width='600' height='400'><span>添加</span></a></li>
    </ul>
  </div>

<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'brand-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'bid',
		'brand_name',
		'logo',
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>