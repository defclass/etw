<div class="detail_main f_left">
  <div class="detail_navigation">
    <p><a href="javascript:;">首页</a> » <a href="javascript:;">产品中心</a> » 产品展示</p>
  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail dategories_style">
    <table width="660">
      <tbody>
        <tr class="dategories_nav">
          <th></th>
          <th style="text-align:left;"><?php echo Yii::t('site','Headline');?></th>
          <th style="width:80px"><?php echo Yii::t('site','Create Date');?></th>
        </tr>
        <?php foreach($article as $ar){ ?>
        <tr class="">
          <td style="width:10px" class="icon">&nbsp;</td>
          <td>
            <a href="<?php echo Yii::app()->createUrl('/AboutUs/DisplayEvent').'/id/'.$ar->id; ?>" target="_blank" title="<?php echo $ar->headline;?>"><?php echo $ar->headline;?></a>
          </td>
          <td width="80"><div align="right"><?php echo date("Y-m-d",$ar->date);?></div></td>
        </tr>
        <?php } ?>
        
      </tbody></table>
  </div>
</div> 
<div class="clear"></div>
<div class="paging">
  <?php $this->widget('CLinkPager', array(
    'pages' => $pages,
  )) ?>
</div>
<!--分页 end-->
</div>
