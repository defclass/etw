<?php
class Captcha extends CFormModel{
    public $code;
 
    public function rules()
    {
        return array(
            array('code', 'required'),
            array('code', 'numerical'),
        );
    }
    
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'code' => '验证码',

		);
	}
}
?>