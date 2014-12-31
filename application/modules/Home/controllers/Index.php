<?php
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction() {//默认Action
        echo 2;

        $this->getView()->assign("content", "Hello aaaWorld");

        //$this->getView()->assign("content", "Hello World");
        $this->getView()->display('index/index.html');
    }

    public function demoAction() {
        echo 1;
        $this->getView()->assign("content", "Hello aaaWorld");
    }
}
?>
