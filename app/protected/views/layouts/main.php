<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>佰润</title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css"/>
    <script type="text/jscript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/jscript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slideshow.js"></script>
    <script type="text/jscript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"></script>
  </head>
  <body>
    <div class="wrap">
      <div class="wrap_inner main_width">
        <!-- top star-->
        <div class="top">
          <span class="f_left">Tel:+86 755 82566559</span>
          <div class="language f_right">
            <span class="language_sanjiao"></span>
            <div class="l_china language_nav"><a href="javascript:;">china 简体中文</a></div>
            <div class="l_box none">
              <div class="l_english"><a href="javascript:;">English</a></div>
              <div class="l_french"><a href="javascript:;">French</a></div>
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
              <div class="l_Indonesian"><a href="javascript:;">Indonesian</a></div>
            </div>
          </div>
        </div><!-- top end-->
        <!-- header star-->
        <div class="header">
          <div class="logo f_left">
            <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_03.png"></a>
          </div>
          <div class="header_text f_left">
            <h4 class="font20">佰润电子有限公司</h4>
            <span class="font16">A Professional Electronics Components Distributor</span>
            <p>Main products: Integrated Circuits (ICs), Capacitors, Resistors, RF transistor,Transistor diodes,Mosfet, IGBT Modul, Connectors!!</p>
          </div>
          <div class="header_seach f_right">
            <form accept-charset="utf-8" method="post" action="">
              <p>
                <input class="seach_text" type="text" value="" name="">
                <input class="btnSearch" type="button" value="Search">
              </p>
              <p>
                热门搜索：<a href="javascript:;">IGBT Power Module......</a>
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
                <a class="nav_width" href="<?php echo $this->createUrl('/Site/Index');?>">网站首页</a>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/Product/Index');?>">产品中心<b></b></a>
                <div class="nav_main none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Product/BrandList'); ?>">分销品牌</a></li>
                    <li><a href="<?php echo $this->createUrl('/Product/ProductDisplay'); ?>">产品展示</a></li>
                    <li><a href="<?php echo $this->createUrl('/Product/Application'); ?>">应用范围</a></li>
                  </ul>
                  <span class="f_right nav_main_img">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>">供应商信息<b></b></a>
                <div class="nav_main none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>">所有供应商</a></li>
                  </ul>
                  <span class="f_right nav_main_img">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/Technology/Index/'); ?>">技术中心<b></b></a>
                <div class="nav_main none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Technology/Index/'); ?>">最新技术</a></li>
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
                <a class="nav_width" href="<?php echo $this->createUrl('/Service/Index'); ?>">客服服务<b></b></a>
                <div class="nav_main nav_main2 none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/Service/Quality'); ?>">质量控制</a></li>
                    <li><a href="<?php echo $this->createUrl('/Service/Order'); ?>">订单信息</a></li>
                    <li><a href="<?php echo $this->createUrl('/Service/Track'); ?>">订单跟踪</a></li>
                    <!-- <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">信息咨询</a></li>
                    <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">帮助</a></li> -->
                  </ul>
                  <span class="f_right nav_main_img nav_main_img2">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li">
                <a class="nav_width" href="<?php echo $this->createUrl('/AboutUs/Index'); ?>">了解我们<b></b></a>
                <div class="nav_main nav_main2 none">
                  <ul class="f_left">
                    <li><a href="<?php echo $this->createUrl('/AboutUs/Advantage'); ?>">企业优势</a></li>
                    <li><a href="<?php echo $this->createUrl('/AboutUs/Culture'); ?>">企业文化</a></li>
                    <li><a href="<?php echo $this->createUrl('/AboutUs/Customers'); ?>">全球客户</a></li>
                    <li><a href="<?php echo $this->createUrl('/AboutUs/CompanyEvents'); ?>">企业事件</a></li>
                       </ul>
                  <span class="f_right nav_main_img nav_main_img2">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/nav_main_ing_13.png" />
                  </span>
                  <div class="clear"></div>
                </div>
              </li>
              <li class="nav_li nav_li2">
                <a class="nav_width" href="<?php echo $this->createUrl('/ContactUs/Index'); ?>">联系我们</a>
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
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">网站首页</a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">产品中心</a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">供应商信息</a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">技术中心</a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">提价咨询</a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">客服服务</a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">了解我们</a></li>
            <li><a href="<?php echo $this->createUrl('/Service/Index'); ?>">联系我们</a></li>
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
