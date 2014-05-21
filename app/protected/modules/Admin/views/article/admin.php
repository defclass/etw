<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/Admin/Article/Create" target="dialog" width='800' height='600'><span>添加</span></a></li>
    </ul>
  </div>
<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'article-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
			'id',
		'category_id',
		'headline',
		'author_id',
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