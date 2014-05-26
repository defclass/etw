<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/Admin/Classify/Create" target="dialog" width='600' height='400'><span>添加</span></a></li>
    </ul>
  </div>

<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'classify-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'cid',
		'classify_name',
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>