<?php
class LayoutPlugin extends Yaf_Plugin_Abstract {

    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "Plugin routerStartup called <br/>\n";
    }

    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "Plugin routerShutdown called <br/>\n";
        //整合smarty
        $dispatcher = Yaf_Dispatcher::getInstance();
//         $dispatcher->disableView();
        $dispatcher->autoRender(false);
        $objSmarty = new Smarty_Adapter;
        $dispatcher->setView($objSmarty);

    }

    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "Plugin DispatchLoopStartup called <br/>\n";
    }

    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "Plugin PreDispatch called <br/>\n";
    }

    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "Plugin postDispatch called <br/>\n";
    }

    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo "Plugin DispatchLoopShutdown called <br/>\n";
    }
}