<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),
    
    'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.commands.CommonCommand',
		'application.modules.admin.models.*',
	),


	// application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=crm',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
            'tablePrefix' => 'crm_',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error,warning,profile,info,warning',
//                    'categories'=>'console.*',
                    'logFile'=> 'log/console.log', 

				),
			),
		),
	),
    'params'=>array(
		// this is used in contact page
		'adminEmail'=>'username@qq.com',
        'commission'=>require('commission.php'),
        'admin_id' => 1397877767207220, //默认最高父节点
        
        /** 
         * 计算有效父节点的相关配置
         */
        'relations'=>array(
            'valid_group' => array(2,3,4),//合法的父节点等级
            'clear_items' =>array( //进来一个group_id后要清除的某些IDs
                4=>array(4),
                3=>array(3,4),
                2=>array(2,3,4),
            ),
        ),
	),

);