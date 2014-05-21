<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class AdminIdentity extends UserIdentity
{
    private $_id;

	/**
	 * Authenticates a admin
	 * The example implementation makes sure if the login_name and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public $loginUrl=array('/admin/login/');
    
	public function authenticate()
	{
        $record=Admin::model()->findByAttributes(array('login_name'=>$this->username));
        if($record===null){
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }elseif(!$record->validatePassword($this->password)){
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }else
            {
                $this->_id=$record->aid;
                $this->setState('login_name',$record->login_name);
                $this->setState('aid',$record->aid);
                $this->errorCode=self::ERROR_NONE;
            }
        return !$this->errorCode;
    }
           
	public function getId(){
        return $this->_id;
    }


}