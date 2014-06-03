<?php  
/** 
 * CLinkPager class file. 
 * 
 * @author Qiang Xue <qiang.xue@gmail.com> 
 * @link http://www.yiiframework.com/ 
 * @copyright Copyright © 2008-2011 Yii Software LLC 
 * @license http://www.yiiframework.com/license/ 
 */  
      
/** 
 * CLinkPager displays a list of hyperlinks that lead to different pages of target. 
 * 
 * @author Qiang Xue <qiang.xue@gmail.com> 
 * @version $Id$ 
 * @package system.web.widgets.pagers 
 * @since 1.0 
 */  
class LinkPager extends CLinkPager  
{  
    const CSS_TOTAL_PAGE='total_page';  
    const CSS_TOTAL_ROW='total_row';  
          
    /** 
     * @var string the text label for the first page button. Defaults to '<< First'. 
     */  
    public $totalPageLabel;  
    /** 
     * @var string the text label for the last page button. Defaults to 'Last >>'. 
     */  
    public $totalRowLabel;  
          
    /** 
     * Creates the page buttons. 
     * @return array a list of page buttons (in HTML code). 
     */  
    protected function createPageButtons()  
    {  
              
      
        $this->maxButtonCount=8;    
        $this->firstPageLabel="<<";  
        $this->lastPageLabel='>>';   
        $this->nextPageLabel='>';  
        $this->prevPageLabel='<';   
        $this->header="";  
              
        if(($pageCount=$this->getPageCount())<=1)  
            return array();  
              
        list($beginPage,$endPage)=$this->getPageRange();  
        $currentPage=$this->getCurrentPage(false); // currentPage is calculated in getPageRange()  
        $buttons=array();  
              
        // first page  
        $buttons[]=$this->createPageButton($this->firstPageLabel,0,self::CSS_FIRST_PAGE,$currentPage<=0,false);  
          
        // prev page  
        if(($page=$currentPage-1)<0)  
            $page=0;  
        $buttons[]=$this->createPageButton($this->prevPageLabel,$page,self::CSS_PREVIOUS_PAGE,$currentPage<=0,false);  
          
        // internal pages  
        for($i=$beginPage;$i<=$endPage;++$i)  
            $buttons[]=$this->createPageButton($i+1,$i,self::CSS_INTERNAL_PAGE,false,$i==$currentPage);  
          
        // next page  
        if(($page=$currentPage+1)>=$pageCount-1)  
            $page=$pageCount-1;  
        $buttons[]=$this->createPageButton($this->nextPageLabel,$page,self::CSS_NEXT_PAGE,$currentPage>=$pageCount-1,false);  
          
        // last page  
        $buttons[]=$this->createPageButton($this->lastPageLabel,$pageCount-1,self::CSS_LAST_PAGE,$currentPage>=$pageCount-1,false);  
              
        // 页数统计  
        $buttons[]=$this->createTotalButton(($currentPage+1)."/{$pageCount}",self::CSS_TOTAL_PAGE,false,false);  
              
        // 条数统计  
        $buttons[]=$this->createTotalButton("Total {$this->getItemCount()} recorders.",self::CSS_TOTAL_ROW,false,false);  
          
        return $buttons;  
    }  
          
    protected function createTotalButton($label,$class,$hidden,$selected)  
    {  
        if($hidden || $selected)  
            $class.=' '.($hidden ? self::CSS_HIDDEN_PAGE : self::CSS_SELECTED_PAGE);  
        return '<li class="'.$class.'">'.CHtml::label($label,false).'</li>';  
    }  
          
    /** 
     * Registers the needed client scripts (mainly CSS file). 
     */  
    public function registerClientScript()  
    {  
        if($this->cssFile!==false)  
            self::registerCssFile($this->cssFile);  
    }  
}  