<div class="detail_main f_left">
  <div class="detail_navigation">
    <p><a href="javascript:;">首页</a> » <a href="javascript:;">产品中心</a> » 产品展示</p>
  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail">
    <div id="right_column">                               
      <div>
        <div id="content_with_box">
          <div style="text-align: center" id="content_right_box">
            <img style="max-width:220px" vspace="8" hspace="1" src="<?php echo Yii::app()->baseUrl.$article->article_image; ?>" alt="<?php echo $article->headline;?>">
          </div>
        </div>
        <p></p>
        <p>This article was posted on <?php echo date("Y-m-d",$article->date);?>.</p>
       <?php echo $article->content;?>
                                 </blockquote>  
                                 <div class="clear"></div>
                                 
    </div>
  </div>
</div> 
<div class="clear"></div>
