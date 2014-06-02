<?php

class TechnologyController extends Controller
{
    private $_model ;

	/**
	 * @默认页面
	 */
	public function actionIndex(){
        $article_obj = new Article;
        $article_obj->category_id = Yii::app()->params['technology_cate_id'];
        /* 要公开的文章 */
        $article_obj->status=1;
        $article = $article_obj->search();
        $this->render('Index',array(
            'article'=>$article->getData(),
            'pages'=>$article->getPagination()
        ));
	}


    /** 
     * @todo 产品详情页
     * 
     * @return 
     */
    public function actionTechDetails(){
        $model = Article::model();
        if(isset($_GET['id'])){
            $article_obj = $model->findbyPK($_GET['id']);
            $this->render('TechDetails',array(
                'article'=>$article_obj,
            ));
        }
    }

}
