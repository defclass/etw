<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/Admin/Order/Create" target="dialog" width='800' height='600'><span>添加</span></a></li>
      <li><a class="add" href="/Admin/Order/ViewOrder" target="dialog" width='800' height='600'><span>查看订单</span></a></li>
    </ul>
  </div>
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
      array  
      (
        'class'=>'ext.dwz.DwzButtonColumn', 
        'template'=>'{view} | {delete}',  
      ),
    ),
  )); ?>
