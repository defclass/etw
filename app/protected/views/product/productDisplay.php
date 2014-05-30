<div class="detail_navigation">
  <p><a href="javascript:;">首页</a> » <a href="javascript:;">产品中心</a> » 产品展示</p>
</div>
<!--右侧内容不同区域-->
<div class="list_detail">
  <table class="round">
    <tbody>
      <tr>
        <td class="lt wlt">
          <div class="product_ShowImg">
            <ul>
              <?php foreach($products as $pr){ ?>
              <li style="margin:15px">
                <a href="detail_product.html" target="_blank"><img src="<?php echo $pr->image_url; ?>"></a>
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
</div> 
<div class="clear"></div>
</div><!-- detail end-->
