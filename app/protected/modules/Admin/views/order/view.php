<div class="page">
  <div class="pageHeader">
    <?php
    $this->breadcrumbs=array(
      'Orders'=>array('index'),
      $model->oid,
    );
    ?>
    <h1>查看Order表的 #<?php echo $model->oid; ?> 记录</h1>
  </div>
  <div class="pageContent" layoutH="28">
    <?php $this->widget('ext.dwz.DwzDetailView' /*'zii.widgets.CDetailView'*/, array(
      'data'=>$model,
      //'cssFile'=>'/css/detailview/styles.css',
      'attributes'=>array(
        'oid',
        'company_name',
        'contact_person',
        'email',
        'tel',
        'inquiry_content',
      ),
    )); ?>
    <br />
    <br />
    <br />
    <p>
      <b>以下是客户填写的订单:</b>
    </p>
    <?php $this->widget('zii.widgets.grid.CGridView',array(
      'dataProvider'=>$records,//数据源
      'ajaxUpdate'=>false,              //是否使用ajax分页   null为ajax分页
      'columns'=>array(
        'model',
        'quantity',
        'brand',
        'price',
        )))
    ?>


  </div>
</div>
