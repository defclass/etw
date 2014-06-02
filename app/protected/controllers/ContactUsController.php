<?php

class ContactUsController extends Controller
{
    private $_model ;

	/**
	 * @默认页面
	 */
	public function actionIndex(){
        $this->render('index');
	}

}
