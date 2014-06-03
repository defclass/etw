<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="detail_nav f_left">
    <ul>
        <li><a class="detail_line" href="<?php echo $this->createUrl('/Site');?>"><?php echo Yii::t('main','Home'); ?></a></li>
        <li>
            <a class="detail_line" href="<?php echo $this->createUrl('/Product/index');?>"><?php echo Yii::t('main','Products'); ?></a>
            <div>
                <span><a href="<?php echo $this->createUrl('/Product/brandList');?>">- <?php echo Yii::t('main','Distribution Brands'); ?></a></span>
                <span><a href="<?php echo $this->createUrl('/Product/ProductDisplay'); ?>">- <?php echo Yii::t('main','Products Show'); ?></a></span>
                <span><a href="<?php echo $this->createUrl('/Product/Application'); ?>">- <?php echo Yii::t('main','Applications'); ?></a></span>
            </div>
        </li>
        <li>
            <a class="detail_line" href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>"><?php echo Yii::t('main','Manufacturers'); ?></a>
            <div>
                <span><a href="<?php echo $this->createUrl('/Manufacturer/Index/'); ?>">- <?php echo Yii::t('main','All Manufacturers'); ?></a></span>
            </div>
        </li>
        <li>
            <a class="detail_line" href="<?php echo $this->createUrl('/Technology/Index/'); ?>"><?php echo Yii::t('main','Technology'); ?></a>
            <div>
                <span><a href="<?php echo $this->createUrl('/Technology/Index/'); ?>">- <?php echo Yii::t('main','New Technologies'); ?></a></span>
            </div>
        </li>
       
        <li>
            <a class="detail_line" href="<?php echo $this->createUrl('/Service/Index'); ?>"><?php echo Yii::t('main','Service'); ?></a>
            <div>
                <span><a href="<?php echo $this->createUrl('/Service/Quality'); ?>">- <?php echo Yii::t('main','Quality Control'); ?></a></span>
                <span><a href="<?php echo $this->createUrl('/Service/Order'); ?>">- <?php echo Yii::t('main','Ordering Information'); ?></a></span>
                <span><a href="<?php echo $this->createUrl('/Service/Track'); ?>">- <?php echo Yii::t('main','Order Tracking'); ?></a></span>
 <!--               <span><a href="<?php echo $this->createUrl('/Service/Index'); ?>">- <?php echo Yii::t('main','Help'); ?></a></span>
                <span><a href="javascript:;">- <?php echo Yii::t('main','Help'); ?></a></span>
-->
            </div>
        </li>
        <li>
            <a class="detail_line" href="<?php echo $this->createUrl('/AboutUs/Index'); ?>"><?php echo Yii::t('main','About Us'); ?></a>
            <div>
                <span><a href="<?php echo $this->createUrl('/AboutUs/Advantage'); ?>">- <?php echo Yii::t('main','Advantage'); ?></a></span>
                <span><a href="<?php echo $this->createUrl('/AboutUs/Culture'); ?>">- <?php echo Yii::t('main','Culture'); ?></a></span>
                <span><a href="<?php echo $this->createUrl('/AboutUs/Customers'); ?>">- <?php echo Yii::t('main','Customers'); ?></a></span>
                <span><a href="<?php echo $this->createUrl('/AboutUs/CompanyEvents'); ?>">- <?php echo Yii::t('main','Company Events'); ?></a></span>
<!-- <span><a href="javascript:;">- 最新职位</a></span> -->
            </div>
        </li>
        <li>
            <a class="detail_line" href="<?php echo $this->createUrl('/ContactUs/Index'); ?>"><?php echo Yii::t('main','Contact Us'); ?></a>
        </li>
    </ul>
    <div class="product_us"><a href="<?php echo $this->createUrl('/ContactUs/Index'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_us_03.png"></a></div>
</div>
	        <?php echo $content; ?>
<?php $this->endContent(); ?>
