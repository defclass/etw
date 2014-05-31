<?php

/**
 * This is the model class for table "{{order}}".
 *
 * The followings are the available columns in table '{{order}}':
 * @property string $oid
 * @property string $company_name
 * @property string $contact_person
 * @property string $email
 * @property string $tel
 * @property string $inquiry_content
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oid', 'length', 'max'=>16),
			array('company_name', 'length', 'max'=>256),
			array('email', 'email',),
			array('tel', 'numerical', 'integerOnly'=>true),
			array('inquiry_content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('oid, company_name,contact_person, email, tel, inquiry_content', 'safe', 'on'=>'search'),
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
			'oid' => '订单ID',
			'company_name' => '公司名',
            'contact_person' => '联系人',
			'email' => 'email',
			'tel' => '电话',
			'inquiry_content' => '询价内容',
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

		$criteria->compare('oid',$this->oid,true);
		$criteria->compare('company_name',$this->company_name,true);
        $criteria->compare('contact_person',$this->contact_person,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('inquiry_content',$this->inquiry_content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
