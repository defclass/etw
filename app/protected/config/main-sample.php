<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Barum',

    //'defaultController' => 'Admin/Login',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'ext.yii-mail.YiiMailMessage',
        'application.modules.srbac.controllers.SBaseController',
        
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'asdfjkl;',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths'=>array(
                'ext.dwz.gii', //可以继续配置其他路径
            ),
		),
        'Admin' => array(
            'class' => 'application.modules.Admin.AdminModule',
        ),
        'srbac' => array(
            'userclass'=>'Admin', //default: User
            'userid'=>'aid', //default: userid
            'username'=>'login_name', //default:username
            'delimeter'=>'/', //default:-
            'debug'=>false, //default :false
            'pageSize'=>10, // default : 15
            'superUser' =>'Authorizer', //default: Authorizer
            'css'=>'srbac.css', //default: srbac.css
            'layout'=>
            'application.views.layouts.main', //default: application.views.layouts.main,//must be an existing alias
            'notAuthorizedView'=> 'srbac.views.authitem.unauthorized', // default:
//srbac.views.authitem.unauthorized, must be an existing alias
            'alwaysAllowed'=>array(
//default: array()
                'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
                'SiteError', 'SiteContact'),
            'userActions'=>array('Show','View','List'), //default: array()
            'listBoxNumberOfLines' => 15, //default : 10
            'imagesPath' => 'srbac.images', // default: srbac.images
            'imagesPack'=>'noia', //default: noia
            'iconText'=>true, // default : false
            'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,
//must be an existing alias
            'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
//must be an existing alias
            'showHeader'=>true, // default: false
            'showFooter'=>true, // default: false
            'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
// must be an existing alias
        ),
	),

    

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'loginUrl'=>array('Admin/Login'),
		),
        'authManager'=>array(
            'class'=>'application.modules.srbac.components.SDbAuthManager',
            'connectionID'=>'db',
            'defaultRoles'=>array('Authenticated', 'Guest'),
            'itemTable' => 'crm_auth_item',//认证项表名称
            'itemChildTable' => 'crm_auth_item_child',//认证项父子关系
            'assignmentTable' => 'crm_auth_assignment',//认证项赋权关系
        ),
		// uncomment the following to enable URLs in path-format
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),

        
		// uncomment the following to use a MySQL database
		'db'=>include('db.php'),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

        'mail' => include("smtp.php"),
        
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
                array(
					'class'=>'CWebLogRoute',
					'levels'=>'error, warning,info',
				),

				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning, info',
                    'categories'=>'error.*',
                    'logFile'=> 'error.log', 
				),
				// uncomment the following to show log messages on web pages
				/*
                  array(
                  'class'=>'CWebLogRoute',
                  ),
				*/
			),
		),
	),


    //'language'=>'zh_cn',
    'sourceLanguage'=>'en_us',

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'username@qq.com',
		'ReceiveEmail'=>'username@qq.com',//订单收件人
        
        'default_admin_group' => 3, //注册用户的默认等级
        'display_brand_classify_id'=>1401070747046472,//要显示品牌的classify 的ID
        //要显示的分类ID
        'technology_cate_id'=>1401676782185359,//tech 要显示的分类ID
        'company_news'=>1401698420468059,//公司新闻显示的分类

        //单面文章显示的页面
        'service_arti_id'=>1401683177035817,//质量控制要显示的文章ID
        'ser_quality_arti_id'=>1401682298957917,//质量控制要显示的文章ID
        'ser_order_arti_id'=>1401683987838706,//订单信息要显示的文章ID
        'ser_track_arti_id'=>1401684097273465,//跟踪信息要显示的文章ID
        'aboutus_arti_id'=>1401696161490352,//关于我们，要显示的文章ID
        'aboutus_advan_arti_id'=>1401696388115973,//优势，显示的文章ID
        'aboutus_culture_arti_id'=>1401696655228800,//企业文件，显示的文章ID
        'aboutus_customers_arti_id'=>1401696947487126,//全球客户，显示的文章ID

        'sales_email'=>'user@domain.com',//销售，客服email

        'lang_map'=>array(
            'en_us'=>array(
                'label'=>'English',
                'class'=>'l_english',
            ),
            'kr'=>array(
                'label'=>'Korean',
                'class'=>'l_Korean',
            ),
            'ru'=>array(
                'label'=>'Russian',
                'class'=>'l_Russian',
            ),
            'pt'=>array(
                'label'=>'Portugal',
                'class'=>'l_Portugal',
            ),
            'ae'=>array(
                'label'=>'Arabic',
                'class'=>'l_Arabic',
            ),
            'de'=>array(
                'label'=>'German',
                'class'=>'l_German',
            ),
            'es'=>array(
                'label'=>'Spanish',
                'class'=>'l_Spanish',
            ),
            'id'=>array(
                'label'=>'Indonesian',
                'class'=>'l_Indonesian',
            ),
            'zh_cn'=>array(
                'label'=>'China 简体中文',
                'class'=>'l_china',
            ),
            'in'=>array(
                'label'=>'Hindi',
                'class'=>'l_Hindi',
            ),
            'it'=>array(
                'label'=>'Italian',
                'class'=>'l_Italian',
            ),
            'ja'=>array(
                'label'=>'Japanese',
                'class'=>'l_Japanese',
            ),
            'Dutch'=>array(
                'label'=>'Dutch',
                'class'=>'l_Dutch',
            ),
            'tr'=>array(
                'label'=>'Turkish',
                'class'=>'l_Turkish',
            ),
            'zh_cn'=>array(
                'label'=>'China 简体中文',
                'class'=>'l_china',
            ),
        ),

        'keywords'=>'China IGBT Power Module distributor | China Hot Selling Product wholesaler |China Integrated Circuits Chips manufacturer | China Circuit Board Chips exporter | China Integrated Circuits (ICs) company | China good quality IGBT Power Module on sales | China good quality chip capacitor on sales',
        'description'=>'China IGBT Power Module distributor | China Hot Selling Product wholesaler |China Integrated Circuits Chips manufacturer | China Circuit Board Chips exporter | China Integrated Circuits (ICs) company | China good quality IGBT Power Module on sales | China good quality chip capacitor on sales',
        
	),
);