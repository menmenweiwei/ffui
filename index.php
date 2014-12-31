<?php
define("APP_PATH",  realpath(dirname(__FILE__) . '/')); /* 指向public的上一级 */
define('PUBLIC_PATH', APP_PATH.'/public');
$app  = new Yaf_Application(APP_PATH . "/../ini/ffui.ini");
$app->bootstrap()->run();
?>
