<div class="detail_main f_left">
  <div class="detail_navigation">
     <p><a href="<?php echo $this->createUrl('/Site/Index'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/ContactUs/Index'); ?>"><?php echo Yii::t('main','Contact Us'); ?></a> </p>
    
  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail">
    <div id="right_column">          
      <div id="content">
        <h1><?php echo Yii::t('site','Contact Us');?></h1>
        <div style="width:290px; height:600px;" class="left-line">                                      
          <p><?php echo Yii::t('site','Add: Rm. 1005, Block B,Zhonghangbeiyuan Building,Zhonghang Rd.,Futian District,Shenzhen,Guangdong,China');?></p>
          <div><?php echo Yii::t('site','Tel');?>: +86 755 82566559</div>
          <div><?php echo Yii::t('site','Fax');?>: +86 755 82566559</div>
          <div>Skype: eddie198212</div>
          <p>
            <a href="http://map.baidu.com/?newmap=1&l=12&tn=B_NORMAL_MAP&s=con%26from%3Dalamap%26tpl%3Dmapcity%26wd%3D%E4%B8%AD%E5%9B%BD%E5%B9%BF%E4%B8%9C%E7%9C%81%E6%B7%B1%E5%9C%B3%E5%B8%82%E7%A6%8F%E7%94%B0%E5%8C%BA%E4%B8%AD%E8%88%AA%E8%B7%AF%E4%B8%AD%E8%88%AA%E5%8C%97%E8%8B%91%E5%A4%A7%E5%8E%A6%26c%3D340">
              <img width="280" height="120" target="_blank" src="<?php echo Yii::app()->baseUrl; ?>/images/map1.jpg" alt="<?php echo Yii::t('site','View map');?>"><br><?php echo Yii::t('site','View map');?></a>
          </p>

          <div class="clear-both"></div>
        </div>


        <div style="width:290px; height:600px;" class="left-line">

          <h4><?php echo Yii::t('site','Sales');?></h4>
          <p>
            Email: 
            <a href="mailto:<?php echo Yii::app()->params['sales_email']; ?>"><?php echo Yii::app()->params['sales_email']; ?></a><br>
            <?php echo Yii::t('site','Tel');?>:  +86-755-83343342<br>
            
            <p>TradeManager: kaijiwei</p>
            <p><a href="http://webatm.alibaba.com/atm_chat.htm?enemberId=kaijiwei" target="_blank"><img src="http://amos.us.alitalk.alibaba.com/online.aw?v=2&amp;uid=jotrin&amp;site=enaliint&amp;s=5" alt="Contact Us" border="0"></a>
            </p>

            
            <br>
            <h4><?php echo Yii::t('site','Technical Support');?></h4>
            <p>
              <?php echo Yii::t('site','Tel');?>: +86-755-89515112<br>
              Email: <a href="mailto:<?php echo Yii::app()->params['sales_email']; ?>"><?php echo Yii::app()->params['sales_email']; ?></a>
            </p>
            <br>
            <h4><?php echo Yii::t('site','Customer Service');?></h4>
            <p>
              Email:  <a href="mailto:<?php echo Yii::app()->params['sales_email']; ?>"><?php echo Yii::app()->params['sales_email']; ?></a>
            </p>

        </div>
        

      </div>  
      <p></p>     
      <div class="clear-both"></div>
    </div>
  </div>
</div> 
<div class="clear"></div>
