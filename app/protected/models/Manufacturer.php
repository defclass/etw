<?php

/**
 * This is the model class for table "br_manufacturer".
 *
 * The followings are the available columns in table 'br_manufacturer':
 * @property string $mid
 * @property string $manufacturer_name
 */
class Manufacturer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{manufacturer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('mid,manufacturer_name','required'),
			array('mid', 'length', 'max'=>16),
			array('manufacturer_name', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mid, manufacturer_name', 'safe', 'on'=>'search'),
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
			'mid' => '供应商ID',
			'manufacturer_name' => '供应商名',
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

		$criteria->compare('mid',$this->mid,true);
		$criteria->compare('manufacturer_name',$this->manufacturer_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


    /** 
     * @todo 获取所有供应商
     * 
     * @return array id=>name
     */
    public function  get_manufacturer(){
        $command = Yii::app()->db->createCommand();
        $data = $command->select('mid,manufacturer_name')
                        ->from('{{manufacturer}}')
                        ->queryAll();
        $container = array(0=>'请选择厂商');
        foreach($data as $row){
           $key = $row['mid'];
           $value = $row['manufacturer_name'];
           $container[$key] = $value;
       }
       return $container;
    }

    
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Manufacturer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
