	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'order-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'oid',
		'company_name',
		'email',
		'tel',
		'inquiry_content',
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>