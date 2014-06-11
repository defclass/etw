<div class="detail_navigation">
     <p><a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Product/Index');?>"><?php echo Yii::t('main','Products'); ?></a> » <?php echo Yii::t('main','Products Show'); ?></p>
</div>
<!--右侧内容不同区域-->
<div class="list_detail f_left">
  <table class="round">
    <tbody>
      <tr>
        <td class="lt wlt">
          <div class="product_ShowImg">
            <ul>
              <?php foreach($products as $pr){ ?>
              <li style="margin:15px">
                <a href="<?php echo Yii::app()->createUrl('/Product/ProductDetails').'/id/'.$pr->pid; ?>" target="_blank"><img src="<?php echo $pr->image_url; ?>"></a>
                <h2><a href="detail_product.html"><?php echo $pr->model; ?></a></h2>
              </li>
              <?php }  ?>
            </ul>
            <div class="clear"></div>
          </div>
        </td>
        <td class="rt wrt"></td>
      </tr>
    </tbody>
  </table>
  <!--分页-->
  <div class="paging">
    <?php $this->widget('LinkPager', array(
      'pages' => $pages,
    )) ?>
  </div>
  <!--分页 end-->
</div>
