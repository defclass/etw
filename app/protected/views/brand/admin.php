	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'brand-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'bid',
		'brand_name',
		'big_logo',
		'small_logo',
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>