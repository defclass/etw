<?php
class PersonSetForm extends CFormModel
{
    public $username;
    public $password;
    public $new_pass;
    public $repeat_pass;
    private $_identity;
    
 
    public function rules()
    {
        return array(
            array('username, password, new_pass,repeat_pass', 'required'),
            array('password', 'authenticate'),
        );
    }

    
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'username' => '登录名',
			'password' => '原密码',
			'new_pass' => '新密码',
			'repeat_pass' => '重复输入',
		);
	}

    public function authenticate()
    {
        $this->username=Yii::app()->user->login_name;
        $this->_identity=new AdminIdentity($this->username,$this->password);
        if(!$this->_identity->authenticate())
            $this->addError('password','原密码错误');
    }
}


?>