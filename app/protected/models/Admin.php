<?php

/**
 * This is the model class for table "br_admin".
 *
 * The followings are the available columns in table 'br_admin':
 * @property string $aid
 * @property string $login_name
 * @property string $login_passwd
 * @property string $salt
 * @property string $email
 * @property integer $sex
 * @property string $admin_tel
 * @property string $real_name
 * @property integer $admin_status
 * @property string $admin_group
 * @property string $reg_ip
 * @property string $reg_date
 * @property string $last_ip
 * @property string $last_visit
 * @property string $last_location
 */
class Admin extends CActiveRecord
{
    private $_lookup;
    private $_identity;
    public $orig_pass;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'br_admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            /* 注册验证 */
            array('login_name,  email ,login_passwd, sex, admin_tel, real_name', 'required','on'=>'register',),
            array(
                'login_name,email',
                'unique',
                'message'=>'"{attribute}{value}"已经被占用,请更换',
                'on'=>'register',
            ),

            /* 登陆验证 */
			array('login_name, login_passwd', 'required','on'=>'login',),

            array('email','email'),
			array('sex, admin_status', 'numerical', 'integerOnly'=>true),
			array('aid', 'length', 'max'=>16),
			array('login_name, login_passwd, email, real_name', 'length', 'max'=>128),
			array('admin_tel', 'length', 'max'=>48),
			array('admin_group', 'length', 'max'=>1),
			array('reg_ip, last_ip', 'length', 'max'=>15),
			array('reg_date, last_visit', 'length', 'max'=>10),
			array('last_location', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('aid, login_name, login_passwd, salt, email, sex, admin_tel, real_name, admin_status, admin_group, reg_ip, reg_date, last_ip, last_visit, last_location', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'aid' => '管理员ID',
			'login_name' => '登录名',
			'login_passwd' => '密码',
			'salt' => '加盐值',
			'email' => 'Email',
			'sex' => '性别',
			'admin_tel' => '手机',
			'real_name' => '真实姓名',
			'admin_status' => '用户状态',
			'admin_group' => '用户等级',
			'reg_ip' => '创建时的IP',
			'reg_date' => '创建时间',
			'last_ip' => '最后IP',
			'last_visit' => '最后登陆时间',
			'last_location' => 'Last Location',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('aid',$this->aid,true);
		$criteria->compare('login_name',$this->login_name,true);
		$criteria->compare('login_passwd',$this->login_passwd,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('admin_tel',$this->admin_tel,true);
		$criteria->compare('real_name',$this->real_name,true);
		$criteria->compare('admin_status',$this->admin_status);
		$criteria->compare('admin_group',$this->admin_group,true);
		$criteria->compare('reg_ip',$this->reg_ip,true);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('last_ip',$this->last_ip,true);
		$criteria->compare('last_visit',$this->last_visit,true);
		$criteria->compare('last_location',$this->last_location,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    /** 
     * @todo 验证密码是否正确
     * @param password 
     * 
     * @return  bool
     */

    public function validatePassword($password) {
        if($this->hashPassword($password, $this->salt) === $this->login_passwd) {
            return true;
        } else {
            return false;
        }
    }
        
    public function hashPassword($password, $salt){
        return sha1($password . $salt);
    }
        

    public function login() {
        if($this->_identity === null) {
            $this->_identity = new AdminIdentity($this->login_name, $this->login_passwd);
        }
        
        $this->_identity->authenticate();
                        
        if($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            Yii::app()->user->login($this->_identity);
            Yii::app()->request->redirect('/Admin/');
            return true;
        } else {
            $this->addError('login_passwd','用户名或密码不正确');
            return false;
        }
    }
    
    /** 
     * @todo 进行注册的相关操作
     * 
     * @return bool
     */
    public function register() {
        /** 
         * 要先产生aid再能执行下面的操作
         */
        if($this->init_admin()){
            return true;
        }else
            return false;
    }

    /** 
     * @todo 注册时初始化admin表的数据
     * 
     * @return bool
     */
    private function init_admin(){
        /* 生成密码和盐值 */
        $passwd =  Common::randon_str(8);
        $salt =  Common::randon_str(4);
        $this->aid = Common::getMaxID();
        $this->login_passwd = $this->hashPassword($passwd,$salt);
        $this->salt = $salt;
        $this->sex = '2';
        $this->admin_group = Yii::app()->params['default_admin_group'];
        $this->admin_tel = '';
        $this->real_name = '';
        $this->admin_status = 0;
        $this->reg_date = time();
        $this->last_visit = time();
        $result = $this->save();
        $this->orig_pass = $passwd;
        return $result;
    }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
