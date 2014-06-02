<?php

class AboutUsController extends Controller
{
    private $_model ;

	/**
	 * @默认页面
	 */
	public function actionIndex(){
        $this->do_action(Yii::app()->params['aboutus_arti_id']);
	}


    /** 
     * @todo 优势页面
     * 
     * @return 
     */
    public function actionAdvantage(){
        $this->do_action(Yii::app()->params['aboutus_advan_arti_id']);
    }


    /** 
     * @todo 优势页面
     * 
     * @return 
     */
    public function actionCulture(){
        $this->do_action(Yii::app()->params['aboutus_culture_arti_id']);
    }

    /** 
     * @todo 优势页面
     * 
     * @return 
     */
    public function actionCustomers(){
        $this->do_action(Yii::app()->params['aboutus_customers_arti_id']);
    }


    /** 
     * @todo 公司新闻
     * 
     * @return 
     */
    public function actionCompanyEvents(){
        $article_model = new Article();
        $article_model->status = 1;
        $article_model->category_id = Yii::app()->params['company_news'];
        $article = $article_model->search();
        
		$this->render('CompanyEvent',array(
			'article'=>$article->getData(),
            'pages'=>$article->getPagination(),
		));
    }

    /** 
     * @todo 公司新闻
     * 
     * @return 
     */
    public function actionDisplayEvent(){
        $article_model = Article::model();
        if(isset($_GET['id'])){
            $article = $article_model->findbyPk($_GET['id']);
            $this->render('index',array(
                'article'=>$article,
            ));
        }
    }

    /** 
     * @todo 为各action 做实际的事务
     * @param article_id  页面要显示的文章的ID
     * 
     * @return 
     */
    private function do_action($article_id){
        $model = Article::model();
        $article = $model->findbyPk($article_id);
        $this->render('index',array(
            'article'=>$article,
        ));
    }
}
