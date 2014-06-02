<?php

class ServiceController extends Controller
{
    private $_model ;

	/**
	 * @默认页面
	 */
	public function actionIndex(){
        $this->do_action(Yii::app()->params['service_arti_id']);
	}


    /** 
     * @todo 质量控制页面
     * 
     * @return 
     */
    public function actionQuality(){
        $this->do_action(Yii::app()->params['ser_quality_arti_id']);
    }



    /** 
     * @todo 订单信息页面
     * 
     * @return 
     */
    public function actionOrder(){
        $this->do_action(Yii::app()->params['ser_order_arti_id']);
    }


      /** 
     * @todo 订单追踪页面
     * 
     * @return 
     */
    public function actionTrack(){
        $this->render('Tracking');
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
