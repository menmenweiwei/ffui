<?php
class IndexController extends BaseController
{
    public function indexAction()
    {//默认Action
        echo $this->user_id;
        $this->getView()->assign("content", "Hello Wor1ld");
        $this->getView()->display('index/index.html');
    }
}
?>
