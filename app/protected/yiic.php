<?php

// change the following paths if necessary
$yiic=dirname(__FILE__).'/../../framework/yiic.php';
$config=dirname(__FILE__).'/config/console.php';
@putenv('YII_CONSOLE_COMMANDS='. dirname(__FILE__).'/commands' ); //这行是新加的
require_once($yiic);
