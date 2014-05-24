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
      array(
        'name' => '文章分类',
        'filter' => CHtml::activeTextField($model, 'name'),
        'value' => '$data->category->name',
      ), 
	  'headline',
      array(
        'name' => '作者',
        'filter' => CHtml::activeTextField($model, 'login_name'),
        'value' => '$data->author->login_name',
      ), 
      array(
        'name' => '日期',
        'filter' => CHtml::activeTextField($model, 'date'),
        'value' => 'date("Y-m-d",$data->date)',
      ), 
	  /*
	  'isstatic',
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
