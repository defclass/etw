<?php
/**
 *
 * User: yiqing
 * Date: 13-2-7
 * Time: 下午11:02
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * 可以安装在controller上 或者使用静态帮助类DwzHelper
 * -------------------------------------------------------
 */
class DwzControllerBehavior extends CBehavior
{

    /**
     * 这个是给dwz界面用的用于返回相应的消息代码
     * @param $message
     * @param string $forwardUrl
     */
    public  function dwzOk($message, $forwardUrl = '')
    {
        $statusCode = '200';
        $navTabId = '';
        $rel = '';
        $callbackType = 'closeCurrent';
        $appEnd = true;
        $dwzResponse = $this->dwzAjaxFormResponse($statusCode, $message, $navTabId, $rel, $callbackType, $forwardUrl);
        echo $dwzResponse;
        if ($appEnd) {
            Yii::app()->end();
        }
    }

    /**
     * 和 dwzOk 是同义词函数
     * @param $message
     * @param string $forwardUrl
     */
    public function dwzSuccess($message, $forwardUrl = ''){
        $statusCode = '200';
        $navTabId = '';
        $rel = '';
        $callbackType = 'closeCurrent';
        $appEnd = true;
        $dwzResponse = $this->dwzAjaxFormResponse($statusCode, $message, $navTabId, $rel, $callbackType, $forwardUrl);
        echo $dwzResponse;
        if ($appEnd) {
            Yii::app()->end();
        }
    }

    /**
     *  这个是给dwz界面用的用于返回相应的消息代码
     * @param $message
     * @param string $forwardUrl
     */
    public  function dwzError($message, $forwardUrl = '')
    {
        if ($message instanceof CModel) {
            if ($message->hasErrors()) {
                $message = preg_replace("/[\n\r]/", '', CHtml::errorSummary($message));
            } else
                $message = '';
        }
        $statusCode = '300';
        $navTabId = '';
        $rel = '';
        $callbackType = 'closeCurrent';
        $appEnd = true;

        $dwzResponse = $this->dwzAjaxFormResponse($statusCode, $message, $navTabId, $rel, $callbackType, $forwardUrl);
        echo $dwzResponse;
        if ($appEnd) {
            Yii::app()->end();
        }
    }

    /**
     * @param string $statusCode
     * @param string $message
     * @param string $navTabId
     * @param string $rel
     * @param string $callbackType
     * @param string $forwardUrl
     * @return string
     */
    protected function dwzAjaxFormResponse($statusCode = '', $message = '', $navTabId = '', $rel = '', $callbackType = 'closeCurrent', $forwardUrl = '')
    {
        $response = array(
            'statusCode' => $statusCode,
            'message' => $message,
            'navTabId' => $navTabId,
            'rel' => $rel,
            'callbackType' => $callbackType,
            'forwardUrl' => $forwardUrl,
        );
        return CJSON::encode($response);
    }
}
