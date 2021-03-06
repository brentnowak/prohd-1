<?php

error_reporting(1);
error_reporting(E_ERROR|E_PARSE);

// change the following paths if necessary
$yii=dirname(__FILE__).'/js/yii-1.1.19.5790cb/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

// check environment
// can be commented out once prohd is running correctly
require('check_env.php');

Yii::createWebApplication($config)->run();
