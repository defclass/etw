<?php
Yii::import('zii.widgets.CListView');
/**
 *
 * User: yiqing
 * Date: 13-2-11
 * Time: 下午7:40
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * 注意和gridView存在同样的问题  重复绑定js的问题
 * -------------------------------------------------------
 */
class DwzListView extends CListView
{

    public function init(){

        $assetsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR .'assets';
        if (YII_DEBUG) {
            $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, true);
        } else {
            $assetsUrl = Yii::app()->assetManager->publish($assetsPath);
        }

        $this->baseScriptUrl = $assetsUrl.'/listview';

        //-------------------------------------------------------------------\\
        if($this->dataProvider===null)
            throw new CException(Yii::t('zii','The "dataProvider" property cannot be empty.'));
        $dp = $this->dataProvider;
        $pageVar = $dp->pagination->pageVar;
        /**
         * 核心问题就是用POST过来的当前页面重设掉get过来的当前页面！
         * 要赶在 $this->dataProvider->getData();之前把pageVar重设掉
         * 而恰恰是在parent::init() 中做了这个事所以需要在parent::init() 方法之前
         * 重设pageVar的值！！
         */
        if (isset($_POST['pageNum'])) {
            $_GET[$pageVar] = $_POST['pageNum'] ;
        }

        //-------------------------------------------------------------------//

        parent::init();


    }

    public  function registerClientScript(){
        parent::registerClientScript();
        $cs = Yii::app()->getClientScript();

        $id = $this->getId();
        $cs->registerScript('fixUI', "function fixUI(){
            initLayout();initUI(navTab.getCurrentPanel());
             //  var url = $('#{$id}').yiiListView('getUrl')
             //$('#pageForm').attr('action',url); // 纠正url
        }");
    }


    protected function renderPageForm($return = true)
    {
        $pagination = $this->dataProvider->getPagination();
        $controller = Yii::app()->getController();
        $url = $pagination->createPageUrl($controller, $pagination->currentPage);
        $pageForm = <<<PF
<form id="pagerForm" action="{$url}" method="post">
      <input type="hidden" name="pageNum" value="1" />
      <!--【必须】value=1可以写死-->

      <!--【可选】其它查询条件，业务有关，有什么查询条件就加什么参数。
      也可以在searchForm上设置属性rel=”pagerForm”，js框架会自动把searchForm搜索条件复制到pagerForm中 -->
</form>
PF;
        if ($return == true) {
            return $pageForm;
        } else {
            echo $pageForm;
        }
    }

    public function renderPager()
    {
        $pagination = $this->dataProvider->getPagination();
        $ts = time();
        /* ob_start();
         parent::renderPager();
         $oldPager = ob_get_clean();
        */
        $totalCount = $pagination->getItemCount();
        $numPerPage = $pagination->getPageSize();
        $pageNumShown = $pagination->getPageCount();
        $currentPage = $pagination->getCurrentPage() +1;

        $pagerHtml = <<<PAGER
<div class="panelBar">
		<div class="pages">
			<span>共{$totalCount}条</span>
			<span>{$ts}</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="{$totalCount}" numPerPage="{$numPerPage}" pageNumShown="{$pageNumShown}" currentPage="{$currentPage}">
		</div>
	</div>

PAGER;
        echo $pagerHtml;
        $this->renderPageForm(false);
    }
}
