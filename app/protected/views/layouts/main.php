<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo Yii::t('main','Barum Electronics Co., LTD'); ?></title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css"/>
    <script type="text/jscript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/jscript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slideshow.js"></script>
    <script type="text/jscript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"></script>
    <script type="text/javascript">
     $(window).scroll(function(){
       var sc=$(window).scrollTop();
       var rwidth=$(window).width()
       if(sc>0){
         $("#goTopBtn").css("display","block");
         $("#goTopBtn").css("left",(rwidth-77)+"px")
       }else{
         $("#goTopBtn").css("display","none");
       }
     })
    </script>
  </head>
  <body>
    <div class="wrap">
      <div id="goTopBtn"><a href="#"></a></div>
      <div id="mail"><a title="发送邮件" href="mailto:<?php echo Yii::app()->params['sales_email'];?>"></a></div>
      <div class="wrap_inner main_width">
        <!-- top star-->
        <div class="top">
          <span class="f_left">Tel:+86 755 82566559</span>
          <div class="language f_right">
            <span class="language_sanjiao"></span>
            <?php $langs = Yii::app()->params['lang_map']; ?>
            <div class="<?php echo $langs[Yii::app()->language]['class'];?> language_nav"><a href="<?php echo $this->langurl(Yii::app()->language);?>"><?php echo $langs[Yii::app()->language]['label'];?></a></div>
            <div class="l_box none">
              <?php foreach($langs as $key => $lang){ ?>
               
                <?php if($key !== Yii::app()->language){ ?>
                  <div class="<?php echo $lang['class'];?>"><a href="<?php echo $this->langurl($key);?>"><?php echo $lang['label'];?></a></div>
                <?php } ?>
                
              <?php } ?>
              <!-- <div class="l_french"><a href="javascript:;">French</a></div>
              <div class="l_German"><a href="javascript:;">German</a></div>
              <div class="l_Italian"><a href="javascript:;">Italian</a></div>
              <div class="l_Russian"><a href="javascript:;">Russian</a></div>
              <div class="l_Spanish"><a href="javascript:;">Spanish</a></div>
              <div class="l_Foriuguese"><a href="javascript:;">Foriuguese</a></div>
              <div class="l_Dutch"><a href="javascript:;">Dutch</a></div>
              <div class="l_Greek"><a href="javascript:;">Greek</a></div>
              <div class="l_Japanese"><a href="javascript:;">Japanese</a></div>
              <div class="l_Korean"><a href="javascript:;">Korean</a></div>
              <div class="l_Arabic"><a href="javascript:;">Arabic</a></div>
              <div class="l_Hindi"><a href="javascript:;">Hindi</a></div>
              <div class="l_Turkish"><a href="javascript:;">Turkish</a></div>
              <div class="l_Indonesian"><a href="javascript:;">Indonesian</a></div> -->
            </div>
          </div>
        </div><!-- top end-->
        <!-- header star-->
        <div class="header">
          <div class="logo f_left">
            <a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_03.png"></a>
          </div>
          <div class="header_text f_left">
            <h4 class="font20"><?php echo Yii::t('main','Barum Electronics Co., LTD'); ?></h4>
            <span class="font16">A Professional Electronics Components Distributor</span>
            <p>Main products: Integrated Circuits (ICs), Capacitors, Resistors, RF transistor,Transistor diodes,Mosfet, IGBT Modul, Connectors!!</p>
          </div>
          <div class="header_seach f_right">
            <form accept-charset="utf-8" method="get" action="<?php echo Yii::app()->createUrl('/Product/Index'); ?>">
              <p>
                <input class="seach_text" type="text" value="" name="keyword">
                <input class="btnSearch" type="submit" value="Search">
              </p>
              <p>
                <?php echo Yii::t('main','Popular Searches'); ?>：<a href="<?php echo Yii::app()->createUrl('/Product/Index').'?keyword=IGBT'; ?>">IGBT Power Module......</a>
              </p>
            </form>
          </div>
          <div class="clear"></div>
        </div><!-- header end-->
        <!-- nav star-->
        <div class="nav">
          <div class="nav_inner">
            <ul>
              <li class="nav_li">
                                  <a class="nav_width" href="<?php echo $this->createUrl('/Site/Index');?>"><?php echo Yii::t('main','Home'); ?></a>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/Product/Index');?>"><?php echo Yii::t('main','Products'); ?><b></b></a>
                <div class="nav_main none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Product/BrandList'); ?>"><?php echo Yii::t('main','Distribution Brands'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/Product/ProductDisplay'); ?>"><?php echo Yii::t('main','Products Show'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/Product/Application'); ?>"><?php echo Yii::t('main','Applications'); ?></a></li>
                  </ul>
                  <span class="f_right nav_main_img">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>"><?php echo Yii::t('main','Manufacturers'); ?><b></b></a>
                <div class="nav_main none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>"><?php echo Yii::t('main','All Manufacturers'); ?></a></li>
                  </ul>
                  <span class="f_right nav_main_img">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/Technology/Index/'); ?>"><?php echo Yii::t('main','Technology'); ?><b></b></a>
                <div class="nav_main none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Technology/Index/'); ?>"><?php echo Yii::t('main','New Technologies'); ?></a></li>
                  </ul>
                  <span class="f_right nav_main_img">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <!-- <li class="nav_li">
              <a class="nav_width" href="javascript:;">提价咨询</a>
              </li> -->
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/Service/Index'); ?>"><?php echo Yii::t('main','Service'); ?><b></b></a>
                <div class="nav_main nav_main2 none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Service/Quality'); ?>"><?php echo Yii::t('main','Quality Control'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/Service/Order'); ?>"><?php echo Yii::t('main','Ordering Information'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/Service/Track'); ?>"><?php echo Yii::t('main','Order Tracking'); ?></a></li>
                    <!-- <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>"><?php echo Yii::t('main','Order Tracking'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>"><?php echo Yii::t('main','Help'); ?></a></li> -->
                  </ul>
                  <span class="f_right nav_main_img nav_main_img2">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/AboutUs/Index'); ?>"><?php echo Yii::t('main','About Us'); ?><b></b></a>
                <div class="nav_main nav_main2 none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/AboutUs/Advantage'); ?>"><?php echo Yii::t('main','Advantage'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/AboutUs/Culture'); ?>"><?php echo Yii::t('main','Culture'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/AboutUs/Customers'); ?>"><?php echo Yii::t('main','Customers'); ?></a></li>
                    <li><a href="<?php echo $this->createUrl('/AboutUs/CompanyEvents'); ?>"><?php echo Yii::t('main','Company Events'); ?></a></li>
                       </ul>
                  <span class="f_right nav_main_img nav_main_img2">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li nav_li2">
                <a class="nav_width" href="<?php echo $this->createUrl('/ContactUs/Index'); ?>"><?php echo Yii::t('main','Contact Us'); ?></a>
              </li>
            </ul>
          </div>
        </div><!-- nav end-->
        <!-- main star -->
        <div class="main">
          <!-- detail star-->
	      <?php echo $content; ?>
        </div><!-- main end-->
        <div class="clear"></div>
      </div>
      <!-- footer star-->
      <div class="footer main_width">
        <div class="footer_inner">
          <ul class="footer_nav f_left">
            <li><a href="<?php echo $this->createUrl('/Site'); ?>"><?php echo Yii::t('main','Home'); ?></a></li>
            <li><a href="<?php echo $this->createUrl('/Product'); ?>"><?php echo Yii::t('main','Products'); ?></a></li>
            <li><a href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>"><?php echo Yii::t('main','Manufacturers'); ?></a></li>
            <li><a href="<?php echo $this->createUrl('/Technology/Index/'); ?>"><?php echo Yii::t('main','Technology'); ?></a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>"><?php echo Yii::t('main','Service'); ?></a></li>
            <li><a href="<?php echo $this->createUrl('/AboutUs/Index'); ?>"><?php echo Yii::t('main','About Us'); ?></a></li>
            <li><a href="<?php echo $this->createUrl('/ContactUs/Index'); ?>"><?php echo Yii::t('main','Contact Us'); ?></a></li>
          </ul>
          <div class="share f_right">
            <ul>
              <li><a class="share1" href="<?php echo $this->createUrl('/Service/Index'); ?>"></a></li>
              <li><a class="share2" href="<?php echo $this->createUrl('/Service/Index'); ?>"></a></li>
              <li><a class="share3" href="<?php echo $this->createUrl('/Service/Index'); ?>"></a></li>
              <li><a class="share4" href="<?php echo $this->createUrl('/Service/Index'); ?>"></a></li>
              <li><a class="share5" href="<?php echo $this->createUrl('/Service/Index'); ?>"></a></li>
              <li><a class="share6" href="<?php echo $this->createUrl('/Service/Index'); ?>"></a></li>
            </ul>
          </div>

          <div class="footer_text">
            &copy;Copyright BARUM ELECTRONICS LIMITED 
          </div>
        </div><!-- footer end-->
      </div>
    </div>
  </body>
</html>
