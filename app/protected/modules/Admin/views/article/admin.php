	<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'article-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'id',
		'category_id',
		'headline',
		'author',
		'date',
		'isstatic',
		/*
		'content',
		'clicount',
		'keyword',
		'status',
		'order',
		*/
			array(
				'class'=>'ext.dwz.DwzButtonColumn',
			),
		),
	)); ?>