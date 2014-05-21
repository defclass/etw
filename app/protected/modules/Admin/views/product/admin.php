	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'product-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'pid',
		'classify',
		'brand',
		'manufacturer',
		'model',
		'package',
		/*
		'RoHS',
		'datecode',
		'quantity',
		'direction',
		'create_time',
		'status',
		*/
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>