<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="detail_nav f_left">
    <ul>
        <li><a class="detail_line" href="index.html">首页</a></li>
        <li>
            <a class="detail_line" href="<?php echo $this->createUrl('/Product/index');?>">产品中心</a>
            <div>
                <span><a href="<?php echo $this->createUrl('/Product/brandList');?>">- 分销品牌</a></span>
                <span><a href="<?php echo $this->createUrl('/Product/ProductDisplay'); ?>">- 产品展示</a></span>
                <span><a href="<?php echo $this->createUrl('/Product/Application'); ?>">- 应用范围</a></span>
            </div>
        </li>
        <li>
            <a class="detail_line" href="javascript:;">供应商信息</a>
            <div>
                <span><a href="javascript:;">- 所有供应商</a></span>
            </div>
        </li>
        <li>
            <a class="detail_line" href="javascript:;">技术中心</a>
            <div>
                <span><a href="javascript:;">- 最新技术</a></span>
            </div>
        </li>
        <li>
            <a class="detail_line" href="javascript:;">提价咨询</a>
        </li>
        <li>
            <a class="detail_line" href="javascript:;">客服服务</a>
            <div>
                <span><a href="javascript:;">- 质量控制</a></span>
                <span><a href="javascript:;">- 订单信息</a></span>
                <span><a href="javascript:;">- 订单跟踪</a></span>
                <span><a href="javascript:;">- 信息咨询</a></span>
                <span><a href="javascript:;">- 帮助</a></span>
            </div>
        </li>
        <li>
            <a class="detail_line" href="javascript:;">了解我们</a>
            <div>
                <span><a href="javascript:;">- 企业优势</a></span>
                <span><a href="javascript:;">- 企业文化</a></span>
                <span><a href="javascript:;">- 全球客户</a></span>
                <span><a href="javascript:;">- 企业事件</a></span>
                <span><a href="javascript:;">- 最新职位</a></span>
            </div>
        </li>
        <li>
            <a class="detail_line" href="javascript:;">联系我们</a>
        </li>
    </ul>
    <div class="product_us"><a href="javascript:;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product_us_03.png"></a></div>
</div>
	        <?php echo $content; ?>
<?php $this->endContent(); ?>