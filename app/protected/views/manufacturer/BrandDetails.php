<div class="detail_main f_left">
  <div class="detail_navigation">
    <p><a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>"><?php echo Yii::t('main','Manufacturers'); ?></a> » <?php echo Yii::t('main','Manufacturer'); ?></p>
    
  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail">
    <div class="manufacturer_details">
      <h1><?php echo $brand->brand_name; ?></h1>
      <?php if(!empty($brand->company_url)){ ?>
      <h5>Visit <a target="_blank" href="http://<?php echo $brand->company_url; ?>">http://<?php echo $brand->company_url; ?></a></h5>
      <?php } ?>
      <div style="line-height: 25px;">
        <form method="get" action="<?php echo Yii::app()->createUrl('/Product/index/').'/brand/id/'.$brand->bid ?>">
          <?php echo $brand->brand_name; ?> Part Search :
          <br />
          <input type="text" name="keyword" class="inputbox"> 
          <input type="submit" class="button" value="Search">
        </form>
      </div>
      <div style="word-wrap: break-word; word-break: break-all; margin:20px 0;">
        <div style="font-family:'';font-size:medium;">
          <?php echo $brand->comment; ?>
        </div>
      </div>
      <div class="clear-left"></div>
      <br>

      <div class="clear"></div>
    </div>
  </div>
</div> 
<div class="clear"></div>
