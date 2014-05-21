	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'classify-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'cid',
		'classify_name',
		'create_time',
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>