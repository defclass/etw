<?php
/**
 *
 * User: yiqing
 * Date: 13-2-8
 * Time: 下午4:26
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */
Yii::import('zii.widgets.grid.CButtonColumn');
class DwzButtonColumn extends CButtonColumn
{

    public $header = '操作';

    public $template='{update}  |  {delete}';
    /**
     * @var array
     */
    public $updateButtonOptions = array('class' => 'update ', 'target' => 'dialog', 'rel' => 'update','width' => '800','height' => '500');

    /**
     * @var array
     */
    public $viewButtonOptions = array('class' => 'view ', 'target' => 'dialog', 'rel' => 'view', 'width' => '800','height' => '500' );

    /**
     * @var array the HTML options for the delete button tag.
     */
    public $deleteButtonOptions = array('class' => 'ajaxDelete', 'target' => 'ajaxTodo');


    /**
     *
     */
    protected function initDefaultButtons()
    {
        //$this->deleteButtonOptions['target'] = 'ajaxTodo';
        //$this->deleteButtonOptions['callback'] = 'dwzAjaxDeleteCallback';
        parent::initDefaultButtons();
        unset($this->buttons['delete']['click']);
        // 重写掉
        if(!isset($this->buttons['delete']['click']))
        {
            if(is_string($this->deleteConfirmation))
                $confirmation = CJavaScript::encode($this->deleteConfirmation);//"if(!confirm(".CJavaScript::encode($this->deleteConfirmation).")) return false;";
            else
                $confirmation = '';

            if(Yii::app()->request->enableCsrfValidation)
            {
                $csrfTokenName = Yii::app()->request->csrfTokenName;
                $csrfToken = Yii::app()->request->csrfToken;
                $csrf = "\n\t\tdata:{ '$csrfTokenName':'$csrfToken' },";
            }
            else
                $csrf = '';

            if($this->afterDelete===null)
                $this->afterDelete='function(){}';

            $this->buttons['delete']['click']=<<<EOD
function() {
	                var th = this;
                alertMsg.confirm($confirmation, {
						okCall: function(){
                           var afterDelete = $this->afterDelete;
                        jQuery('#{$this->grid->id}').yiiGridView('update', {
                            type: 'POST',
                            url: jQuery(th).attr('href'),$csrf
                            success: function(data) {
                                jQuery('#{$this->grid->id}').yiiGridView('update');
                                afterDelete(th, true, data);
                            },
                            error: function(XHR) {
                                return afterDelete(th, false, XHR);
                            }
                        });
						}
					});


	return false;
}
EOD;
        }
    }


}
