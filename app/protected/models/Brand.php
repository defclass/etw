<?php

/**
 * This is the model class for table "br_brand".
 *
 * The followings are the available columns in table 'br_brand':
 * @property string $bid
 * @property string $brand_name
 * @property string $logo
 */
class Brand extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{brand}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('bid, brand_name,logo', 'required'),
			array('bid', 'length', 'max'=>16),
			array('brand_name', 'length', 'max'=>64),
			array('logo', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bid, brand_name', 'safe', 'on'=>'search'),
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
			'bid' => '品牌ID',
			'brand_name' => '品牌名',
            'logo' => 'logo图路径'
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

		$criteria->compare('bid',$this->bid,true);
		$criteria->compare('brand_name',$this->brand_name,true);
		$criteria->compare('logo',$this->logo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


    /** 
     * @todo 获取所有品牌
     * 
     * @return array id=>name
     */
    public function  get_brands(){
        $command = Yii::app()->db->createCommand();
        $data = $command->select('bid,brand_name')
                        ->from('{{brand}}')
                        ->queryAll();
        $container = array(0=>'请选择品牌');
        foreach($data as $row){
           $key = $row['bid'];
           $value = $row['brand_name'];
           $container[$key] = $value;
       }
       return $container;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Brand the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /** 
     * @todo 获得所有品牌
     * 
     * @return CActiveDataProvider
     */
    public function all_brands(){
        $criteria = new CDbCriteria;
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}
