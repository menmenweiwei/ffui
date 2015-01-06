<?php
class IndexController extends AdminController
{
    public function indexAction()
    {//默认Action
        commen::dump($this->getRequest()->getParam('name',0));
        commen::dump($this->getRequest()->getParam('value',0));
        $this->getView()->assign("content", "Hello aaaWorld");

        //$this->getView()->assign("content", "Hello World");
        $this->getView()->display('index/index.html');
    }

    public function demoAction()
    {
        $this->getView()->assign("content", "Hello aaaWorld");
    }
}
?>
