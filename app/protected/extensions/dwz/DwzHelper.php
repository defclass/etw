<?php
/**
 *
 */
class DwzHelper
{

    /**
     * 这个是给dwz界面用的用于返回相应的消息代码
     * @param $message
     * @param string|array $rel
     * 数组或者rel参数（参考dwz返回结构中的rel）
     * 当时数组时可以添加其余dwz支持的变量 因为第一个变量message已经指定
     * 如果数组中仍然存在一个message键 那么会覆盖第一个的！
     * array(
     *   'forwardUrl'=>$this->createUrl(),
     *   'xx'=>xx
     * )
     *
     */
    public static  function success($message, $rel = '')
    {
        $statusCode = '200';
        $navTabId = '';
       // $rel = '';
        $callbackType = 'closeCurrent';
        $forwardUrl = '';
        $appEnd = true;

        if(is_array($rel)){
            extract($rel);
        }

        $dwzResponse = self::ajaxFormResponse($statusCode, $message, $navTabId, $rel, $callbackType, $forwardUrl);

        echo $dwzResponse;

        if ($appEnd) {
            Yii::app()->end();
        }
    }


    /**
     *  这个是给dwz界面用的用于返回相应的消息代码
     * @param $message
     * @param string|array $forwardUrl
     * 同success方法 第二个参数是数组时可以传递额外dwz支持的标准方法
     * 可用key 参考：
     * ajaxFormResponse 方法的参数！
     */
    public static   function error($message, $forwardUrl = '')
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

        if(is_array($forwardUrl)){
            extract($forwardUrl);
        }

        $dwzResponse = self::ajaxFormResponse($statusCode, $message, $navTabId, $rel, $callbackType, $forwardUrl);
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
    protected static  function ajaxFormResponse($statusCode = '', $message = '', $navTabId = '', $rel = '', $callbackType = 'closeCurrent', $forwardUrl = '')
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