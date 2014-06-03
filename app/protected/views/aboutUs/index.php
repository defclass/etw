<div class="detail_main f_left">
  <div class="detail_navigation">
     <p><a href="<?php echo $this->createUrl('/Site/Index'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/AboutUs/Index'); ?>"><?php echo Yii::t('main','About Us'); ?></a> » <?php echo Yii::t('main',$article->headline); ?></p>

  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail service">
    <div id="content">
      <h1><?php echo $article->headline; ?></h1>
      <?php echo $article->content; ?>
    </div>
  </div>
</div> 
<div class="clear"></div>
