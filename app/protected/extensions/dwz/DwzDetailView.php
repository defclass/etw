<?php
Yii::import('zii.widgets.CDetailView');
/**
 *
 * User: yiqing
 * Date: 13-2-8
 * Time: 下午6:21
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */
class DwzDetailView extends CDetailView
{

    public function init()
    {
        parent::init();
        if (isset($this->htmlOptions['class'])) {
            $this->htmlOptions['class'] .= ' list';
        } else {
            $this->htmlOptions['class'] = ' table';
        }

    }
}
