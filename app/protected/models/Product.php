<?php

/**
 * This is the model class for table "br_product".
 *
 * The followings are the available columns in table 'br_product':
 * @property string $pid
 * @property string $classify
 * @property string $brand
 * @property string $manufacturer
 * @property string $model
 * @property string $package
 * @property string $RoHS
 * @property string $datecode
 * @property integer $quantity
 * @property string $direction
 * @property string $create_time
 * @property integer $status
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'br_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('direction', 'required'),
			array('quantity, status', 'numerical', 'integerOnly'=>true),
			array('pid, classify, brand, manufacturer', 'length', 'max'=>16),
			array('model, package, RoHS, datecode, direction', 'length', 'max'=>64),
			array('create_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pid, classify, brand, manufacturer, model, package, RoHS, datecode, quantity, direction, create_time, status', 'safe', 'on'=>'search'),
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
			'pid' => '产品ID',
			'classify' => '产品分类',
			'brand' => '产品品牌',
			'manufacturer' => '厂商',
			'model' => '型号',
			'package' => '封装',
			'RoHS' => 'RoHS',
			'datecode' => '批号',
			'quantity' => '数量',
			'direction' => '注释',
			'create_time' => '创建时间',
			'status' => '产品状态0显示1不显示',
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

		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('classify',$this->classify,true);
		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('manufacturer',$this->manufacturer,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('package',$this->package,true);
		$criteria->compare('RoHS',$this->RoHS,true);
		$criteria->compare('datecode',$this->datecode,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('direction',$this->direction,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
