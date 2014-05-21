<?php

class LoginController extends Controller
{
    /**
     * @var CActiveRecord 当前载入的model实例
     */
    private $_model;

    /* 定义默认的action */
    public $defaultAction = 'Login';

    /** 
     * @todo 
     * @param array array('email'=>''
     *                    'login_name'=>''
     *                    'login_passwd'=>''
     *               )
     * 
     * @return 
     */

    public function Mail($model){
        $message = new YiiMailMessage;
        $message->view = "registerNew";
        $params = array('myMail'=>$model);
        $message->subject = '注册成功，请查收账号信息';
        $message->setBody($params, 'text/html');                
        $message->addTo($model->email);
        $message->from = Yii::app()->params['adminEmail'];   
        if(Yii::app()->mail->send($message))
            return true;
        else
            return false;
    }

    /** 
     * @todo 用户登陆的视图显示及验证
     *  判断用户是否登陆 Yii::app()->user->isGuest
     * @return 
     */
    public function actionLogin() {
        $model = new Admin('login');

        /* 验证登陆，这里如果有错误，会自动收集到model中的errors属性中，呈数组存在 */
        if(isset($_POST['Admin'])) {
            $model->attributes = $_POST['Admin'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login()){
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array(
            'model' => $model,
        ));
        
    }

    
    public function actionRegister(){
        /* 检测是否为推荐人过来的链接，如果是则设置cookie,值 */
        if(isset($_GET['puk'])){
            $cookie=new CHttpCookie('puk',$_GET['puk']);
            /* cookie 30天有效 */
            $cookie->expire = time()+60*60*24*30;
            Yii::app()->request->cookies['puk']=$cookie;
        }

        $model = new Admin('register');
        /* 验证登陆，这里如果有错误，会自动收集到model中的errors属性中，呈数组存在 */
        if(isset($_POST['Admin'])) {
            $model->attributes = $_POST['Admin'];
            // validate user input and redirect to the previous page if valid
            if($model->validate()) {
                if($model->register()){
                    /* 设置推荐人 */
                     $cookie= Yii::app()->request->getCookies();
                     if(isset($cookie['puk'])) {
                         $admin_rlt = new AdminRelation();
                         $admin_rlt->aid = $model->aid;
                         $admin_rlt->fid = $cookie['puk'];
                         $admin_rlt->save();
                     }
                     /* 发送邮件 */
                    $rt = $this->Mail($model);
                    if($rt)
                        $model->addError('email',"恭喜,注册成功!用户名和密码已发送至您的邮箱!</br>请<a href=\"".$this->createUrl('/Admin/Login/Login/')."\">点击</a>登陆后台");
                    else
                        $model->addError('email',"注册失败");
                        
                }
            }

            
            
        }
        // display the register form
        $this->render('register', array(
            'model' => $model,
        ));

    }
    
    public function actionLogout(){
        /** 
         * 退出时把自己的cookie值写入到本电脑中
         */
        $cookie=new CHttpCookie('puk',Yii::app()->user->aid);
        /* cookie 30天有效 */
        $cookie->expire = time()+60*60*24*30;

        Yii::app()->request->cookies['puk']=$cookie;  
        $abc = Yii::app()->user->logout();
        $this->redirect('/Admin/Login');
    }

    /**
     * 执行AJAX验证
     * @param CModel 被验证的model
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='admin-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
    }
}
