<div class="detail_main f_left">
  <div class="detail_navigation">
     <p><a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Technology/Index/'); ?>"><?php echo Yii::t('main','Technology'); ?></a> </p>
  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail f_left">
    <div id="rightcolumn">
      <?php foreach($article as $ar){ ?>
      <div>
        <div style="width: 100px; padding-top: 20px;" class="f_left">
          &nbsp; &nbsp;&nbsp; &nbsp;
          <strong><?php echo date("Y-m-d",$ar->date); ?></strong>
        </div>
        <div style="width: 450px; padding-top: 20px;" class="left-line">
          <div class="techimg">
            <a target="_blank" href="<?php echo Yii::app()->createUrl("/Technology/TechDetails")."/id/".$ar->id; ?>"><img src="<?php echo Yii::app()->baseUrl.$ar->article_image;?>" class="Recommendedpic1" style="max-width:60px;height:50px"></a>
          </div>
          <div>
            <a target="_blank" href="<?php echo Yii::app()->createUrl("/Technology/TechDetails")."/id/".$ar->id; ?>"><?php echo $ar->headline;?></a>
            <p style="margin:0;padding:0;"><?php echo substr(strip_tags($ar->content),0,200);?>...</p>
          </div>
        </div>
      </div>
    <?php } ?>
      
      <div class="clear"></div>
    </div>
    <!--分页-->
    <div class="paging">
    <?php $this->widget('LinkPager', array(
      'pages' => $pages,
    )) ?>
    </div>
    <!--分页 end-->
  </div>
</div> 
