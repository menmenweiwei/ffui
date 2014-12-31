<?php

/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{
    protected $config;

    public function _initConfig(Yaf_Dispatcher $dispatcher) {
        $this->config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $this->config);
        //判断请求方式，命令行请求应跳过一些HTTP请求使用的初始化操作，如模板引擎初始化
        define('REQUEST_METHOD', strtoupper($dispatcher->getRequest()->getMethod()));
        //Yaf_Loader::import(APP_PATH . '/conf/defines.inc.php');

    }

    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {

    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $layout = new LayoutPlugin();
        $dispatcher->registerPlugin($layout);
    }

    public function _initRouter(Yaf_Dispatcher $dispatcher) {
        $router = Yaf_Dispatcher::getInstance()->getRouter();
        $router->addConfig(Yaf_Registry::get("config")->routes);

    }
}