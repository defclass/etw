<?php

$dwzLayoutContent = <<<CONTENT

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title><?php echo \$this->pageTitle; ?> - 后台管理-DWZ - <?php echo Yii::app()->name; ?></title>


    <style type="text/css">
        #header{height:85px}
        #leftside, #container, #splitBar, #splitBarProxy{top:90px}
    </style>
    <?php \$this->widget("ext.dwz.DwzWidget"); ?>
</head>

<body scroll="no">
<div id="layout">
    <div id="header">
        <div class="headerNav">
            <a class="logo" href="http://j-ui.com">标志</a>
            <ul class="nav">
                <li id="switchEnvBox"><a href="javascript:">（<span>北京</span>）切换城市</a>
                    <ul>
                        <li><a href="sidebar_1.html">北京</a></li>
                        <li><a href="sidebar_2.html">上海</a></li>
                        <li><a href="sidebar_2.html">南京</a></li>
                        <li><a href="sidebar_2.html">深圳</a></li>
                        <li><a href="sidebar_2.html">广州</a></li>
                        <li><a href="sidebar_2.html">天津</a></li>
                        <li><a href="sidebar_2.html">杭州</a></li>
                    </ul>
                </li>
                <li><a href="https://me.alipay.com/dwzteam" target="_blank">捐赠</a></li>
                <li><a href="changepwd.html" target="dialog" width="600">设置</a></li>
                <li><a href="http://www.cnblogs.com/dwzjs" target="_blank">博客</a></li>
                <li><a href="http://weibo.com/dwzui" target="_blank">微博</a></li>
                <li><a href="http://bbs.dwzjs.com" target="_blank">论坛</a></li>
                <li><a href="login.html">退出</a></li>
            </ul>
            <ul class="themeList" id="themeList">
                <li theme="default"><div class="selected">蓝色</div></li>
                <li theme="green"><div>绿色</div></li>
                <!--<li theme="red"><div>红色</div></li>-->
                <li theme="purple"><div>紫色</div></li>
                <li theme="silver"><div>银色</div></li>
                <li theme="azure"><div>天蓝</div></li>
            </ul>
        </div>

        <div id="navMenu">
            <ul>
                <li class="selected">
                    <a href="sidebar_1.html"><span>资讯管理</span></a>
                </li>
                <li>
                    <a href="sidebar_2.html"><span>订单管理</span></a>
                </li>
                <li>
                    <a href="sidebar_1.html"><span>产品管理</span></a>
                </li>
                <li><a href="sidebar_2.html"><span>会员管理</span></a></li>
                <li><a href="sidebar_1.html"><span>服务管理</span></a></li>
                <li><a href="sidebar_2.html"><span>系统设置</span></a></li>
            </ul>
        </div>
    </div>

    <div id="leftside">
        <div id="sidebar_s">
            <div class="collapse">
                <div class="toggleCollapse"><div></div></div>
            </div>
        </div>
        <div id="sidebar">
            <div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

            <?php \$this->widget("ext.dwz.DwzAccordion", array(
				"panels"=>array(
					"常用管理"=>\$this->renderPartial("menu_tree",null,true),
				),
				))?>

        </div>
    </div>
    <div id="container">
			<?php \$this->widget("ext.dwz.DwzNavTab", array(
				"tabs"=>array(
					"管理区首页"=>\$this->renderPartial("index",null,true),
				),
				"htmlOptions"=>array("class"=>"a b"),
				)); ?>
	</div>
</div>

<div id="footer">Copyright &copy; 2010 <a href="demo_page2.html" target="dialog">DWZ团队</a></div>
</body>
</html>

CONTENT;

echo $dwzLayoutContent ;
