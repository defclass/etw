<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
//class Controller extends SBaseController This is srbac required
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
    /** 
     * 设置当前站点显示的语言 
     */

    public $site_keywords;

    public $site_description;

        

    
    public function init()  
    {
        $this->site_keywords = Yii::app()->params['keywords'];
        
        $this->site_description = Yii::app()->params['description'];

        
        if(isset($_GET['lang']) && $_GET['lang'] != "")  
            {  
                // 通过传递参数更改语言  
                Yii::app()->language = $_GET['lang'];  
                // 设置COOKIE，  
                Yii::app()->request->cookies['lang'] = new CHttpCookie('lang', $_GET['lang']);  
            }  
        else if (isset(Yii::app()->request->cookies['lang']) && Yii::app()->request->cookies['lang']->value != "")  
            {  
                // 根据COOKIE中语言类型来设置语言  
                Yii::app()->language = Yii::app()->request->cookies['lang']->value;  
            }  
        else  
            {  
                // 根据浏览器语言来设置语言  
                $lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);  
                Yii::app()->language = strtolower(str_replace('-', '_', $lang[0]));  
            }  
    }  
  
    /** 
     * 用于生成多语言链接 
     * @param type $lang 
     * @return string 
     */  
    public function langurl($lang = 'en_us')  
    {  
        if ($lang == Yii::app()->language)  
            {  
                return null;  
            }  
  
        $current_uri = Yii::app()->request->requestUri;  
        if (strrpos($current_uri, 'lang=')) {  
            //防止生成的 url 传值出现重复  
            $langstr = 'lang=' . Yii::app()->language;  
            $current_uri = str_replace('?' . $langstr . '&', '?', $current_uri);  
            $current_uri = str_replace('?' . $langstr, '', $current_uri);  
            $current_uri = str_replace('&' . $langstr, '', $current_uri);  
        }  
        if (strrpos($current_uri, '?')) {  
            return $current_uri . '&lang=' . $lang;  
        } else {  
            return $current_uri . '?lang=' . $lang;  
        }  
    }  
}