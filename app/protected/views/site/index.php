<?php
/* @var $this SiteController */
?>

</script>
  <!--banner star-->
  <div class="banner f_left">
    <!-- 代码 开始 -->
    <div class="comiis_wrapad" id="slideContainer">
      <div id="frameHlicAe" class="frame cl">
        <div class="temp"></div>
        <div class="block">
          <div class="cl">
            <ul class="slideshow" id="slidesImgs">
              <li><a href="javascript:;" target="_blank">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner1.png" /></a></li>
              <li><a href="javascript:;" target="_blank">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner2.png" /></a></li>
              <li><a href="javascript:;" target="_blank">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner3.png" /></a></li>
              <li><a href="javascript:;" target="_blank">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner4.png" /></a></li>
            </ul>
          </div>
          <div class="slidebar" id="slideBar">
            <ul>
              <li class="on">1</li>
              <li>2</li>
              <li>3</li>
              <li>4</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
     SlideShow(4000);
    </script>
    <!-- 代码 结束 -->
  </div><!-- banner end-->
  <!-- information star-->
  <div class="information f_right">
    <!-- information star-->
    <div class="information f_right">
      <div class="description">
    <h3><?php echo Yii::t('site','Welcome to Barum Electronics');?></h3>
        <p>    <?php echo Yii::t('site','Barum Electronics Co., LTD had been established， in line with the good faith principle, is supreme, the mutually beneficial reciprocal benefit management ');?>......</p>
        <a href="javascript:;">more>></a>
      </div>
      <div class="doubt">
        <a href="javascript:;">
    <h4><?php echo Yii::t('site','Contact Us');?></h4>
          <p><?php echo Yii::t('site','Any question? Please consult our technical staff and customer service personnel!');?></p>
        </a>
      </div>
    </div><!-- information end-->
  </div><!-- information end-->
  <div class="clear"></div>
  <div class="product_information">
    <!--product star-->
    <div class="product f_left">
      <div class="product_nav">
        <?php echo  Yii::t('site','Product List'); ?>
        <span><a class="a_underline" href="list_product.html">more>></a></span>
      </div>
      <div class="product_main">
        <ul>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_27.png"></a>
            <span><a href="javascipt:;">集成电路 (ICs) </a></span>
            <p><a href="javascipt:;">Integrated circuits are also referred to as ICs, chips, or microchips. The integration of large transistors</a></p>
          </li>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_29.png"></a>
            <span><a href="javascipt:;">电容(Capacitors)</a></span>
            <p><a href="javascipt:;">Capacitors (formerly known as condensers) are passive two-terminal electrical components used to store</a></p>
          </li>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_32.png"></a>
            <span><a href="javascipt:;"> 电阻 (Resistors) </a></span>
            <p><a href="javascipt:;">Resistors are common elements of electrical networks and electronic circuits and are common in most </a></p>
          </li>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_35.png"></a>
            <span><a href="javascipt:;">高频管(RF transistor)  </a></span>
            <p><a href="javascipt:;">Integrated circuits are also referred to as ICs, chips, or microchips. The integration of large transistors</a></p>
          </li>
          <div class="clear"></div>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_41.png"></a>
            <span><a href="javascipt:;">二三级管 (transistor diodes)</a></span>
            <p><a href="javascipt:;">Integrated circuits are also referred to as ICs, chips, or microchips. The integration of large transistors</a></p>
          </li>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_42.png"></a>
            <span><a href="javascipt:;">场效应晶体管 (Mosfet) </a></span>
            <p><a href="javascipt:;">Capacitors (formerly known as condensers) are passive two-terminal electrical components used to store</a></p>
          </li>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_43.png"></a>
            <span><a href="javascipt:;"> 模块 (IGBT Modul)  </a></span>
            <p><a href="javascipt:;">Resistors are common elements of electrical networks and electronic circuits and are common in most </a></p>
          </li>
          <li>
            <a class="product_img" href="javascipt:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_img_44.png"></a>
            <span><a href="javascipt:;">连接器 (Connectors)  </a></span>
            <p><a href="javascipt:;">Integrated circuits are also referred to as ICs, chips, or microchips. The integration of large transistors</a></p>
          </li>
          <div class="clear"></div>
        </ul>
      </div>
    </div><!--product end-->
    <div class="f_right brand">
      <div class="branding">
        <div class="branding_l f_left">
    <h4><?php echo Yii::t('site','Why Barun?');?></h4>
          <ul>
            <li><?php echo Yii::t('site','Large inventory spot');?></li>
            <li><?php echo Yii::t('site','Provide one-stop service');?></li>
            <li><?php echo Yii::t('site','Quick Quote, quality');?></li>
            <li><?php echo Yii::t('site','Fast delivery');?></li>
          </ul>
        </div>
        <div class="branding_r f_right">
          <span><?php echo Yii::t('site','Honesty');?></span>
          <span><?php echo Yii::t('site','Specialty');?></span>
          <span><?php echo Yii::t('site','Reliable');?></span>
        </div>
        <div class="clear"></div>
      </div>
      <div class="proxy">
        <div class="proxy_inner">
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_45.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_47.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_49.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_50.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_51.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_52.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_57.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_58.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_59.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_60.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_61.png"></a>
          <a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/proxy_62.png"></a>
        </div>
        <div class="proxy_text">
          <h5><?php echo Yii::t('site','Brand agency');?></h5>
          <p><?php echo Yii::t('site','More than 500 global components brands channels of supply and distributed components of the United States, Europe, Asia these brand manufacturers, including integrated circuits, two transistors, resistors and capacitors, connectors, modules, etc.'); ?>。<a href="<?php echo Yii::app()->createUrl('/Manufacturer/Index');?>">更多>></a></p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
