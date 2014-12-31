<?php
     class UserPlugin extends Yaf_Plugin_Abstract {

     public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		//var_dump($request->getParams());

    echo 1;

     }

     public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
     	#	var_dump($request->get('id'));
     }
     }
