     
<?php

/**
 * 当有未捕获的异常, 则控制流会流到这里
 */
class ErrorController extends Yaf_Controller_Abstract
{
    /**
     * 此时可通过$request->getException()获取到发生的异常
     */
    public function errorAction()
    {
        $exception = $this->getRequest()->getException();
        try {
            throw $exception;
        } catch (Yaf_Exception_LoadFailed $e) {
            //加载失败

            $this->getView()->assign("content", "Hello World");
            $this->getView()->assign('exception', $e);
        } catch (Yaf_Exception $e) {
            //其他错误

            $this->getView()->assign("content", "Hello World");
            $this->getView()->assign('exception', $e);
        }


        $this->getView()->assign("content", "Hello World");
    }

}
