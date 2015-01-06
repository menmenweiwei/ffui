<?php
class AdminController extends Yaf_Controller_Abstract
{
    public function init()
    {
        $this->getView()->assign("layout_path", APP_PATH.'/application/views/admin/');
    }
}
?>
