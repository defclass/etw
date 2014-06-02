<div class="detail_navigation">
  <p><a href="javascript:;">首页</a> » <a href="javascript:;">产品中心</a> » 产品展示</p>
</div>
<!--右侧内容不同区域-->
<div class="list_detail manufacturer">
  <table width="100%" class="list">
    <tbody>

      <?php foreach($manufacturers as $ma ){ ?>
      <tr class="row">
        <td class="icon">
          <a href="#" target="_blank" title="<?php echo $ma->manufacturer_name; ?>"><img src="images/proxy_45.png" alt="<?php echo $ma->manufacturer_name; ?>" style="max-width:130px;max-height:45px"></a>
        </td>
        <td>
          <em><a href="#" target="_blank" title="<?php echo $ma->manufacturer_name; ?>"><?php echo $ma->manufacturer_name; ?></a></em><br>http://<?php echo $ma->company_url; ?><br>
          <?php echo $ma->comment; ?>
        </td>
      </tr>

      <?php } ?>
    </tbody></table>
  <!--分页-->
  <div class="paging">
    <?php $this->widget('CLinkPager', array(
      'pages' => $pages,
    )) ?>
  </div>
  <!--分页 end-->
</div>
</div> 
<div class="clear"></div>
</div><!-- detail end-->
