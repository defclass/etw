<div class="detail_navigation">
     <p><a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>"><?php echo Yii::t('main','Manufacturers'); ?></a> </p>
</div>
<!--右侧内容不同区域-->
<div class="list_detail brand">
  <table width="100%" class="list">
    <tbody>

      <?php foreach($brands as $br ){ ?>
      <tr class="row">
        <td class="icon">
           <a href="<?php echo Yii::app()->createUrl('/Manufacturer/BrandDetails/').'/id/'.$br->bid;?>" target="_blank" title="<?php echo $br->brand_name; ?>"><img src="<?php echo Yii::app()->baseUrl.$br->logo; ?>" alt="<?php echo $br->brand_name; ?>" style="max-width:130px;max-height:45px"></a>
        </td>
        <td>
          <em><a href="<?php echo Yii::app()->createUrl('/Manufacturer/BrandDetails/').'/id/'.$br->bid;?>" target="_blank" title="<?php echo $br->brand_name; ?>"><?php echo $br->brand_name; ?></a></em>
          <br>http://<?php echo $br->company_url; ?>
          <br>
         <?php echo substr( $br->comment,0 ,100); ?>
        </td>
      </tr>

      <?php } ?>
    </tbody></table>
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
