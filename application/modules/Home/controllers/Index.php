<?php
class IndexController extends BaseController
{
    public function indexAction() {//默认Action
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
