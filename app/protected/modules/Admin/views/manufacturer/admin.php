	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'manufacturer-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'mid',
		'manufacturer_name',
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>