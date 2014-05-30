<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/Admin/Product/Create" target="dialog" width='600' height='400'><span>添加</span></a></li>
    </ul>
  </div>

<?php $this->widget('ext.dwz.DwzGridView', array(
		'id'=>'product-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		//'cssFile'=>'/css/gridview/styles.css',
		'columns'=>array(
		 'pid',
         array(
             'name' => '产品分类',
             'filter' => CHtml::activeTextField($model, 'classify'),
             'value' => '$data->c->classify_name',
         ),

         array(
             'name' => '产品品牌',
             'filter' => CHtml::activeTextField($model, 'brand'),
             'value' => '$data->b->brand_name',
         ),
         array(
             'name' => '产品供应商',
             'filter' => CHtml::activeTextField($model, 'manufacturer'),
             'value' => '$data->m->manufacturer_name',
         ), 
		'model',
         'package',
         'image_url',
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