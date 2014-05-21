	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'category-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'cid',
		'name',
		'fid',
		'issingle',
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>