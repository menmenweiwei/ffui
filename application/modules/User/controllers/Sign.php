<?php
class SignController extends AdminController
{
    public function signinAction()
    {
        $user = new UserModel;

        $info = $user->get_one('22614556@qq.com');

        $this->getView()->assign("list", array(1,2,3,4,5,6,7,8,9));

        $this->getView()->display('sign/signin.html');
    }

    public function phpiAction()
    {
        phpinfo();
    }
}
?>
