<?php

/**
 * This is the model class for table "br_order_detail".
 *
 * The followings are the available columns in table 'br_order_detail':
 * @property string $od_id
 * @property string $oid
 * @property string $model
 * @property integer $quantity
 * @property string $manufacturer
 * @property string $price
 * @property string $create_time
 * @property integer $status
 */
class OrderDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'br_order_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quantity, status', 'numerical', 'integerOnly'=>true),
			array('od_id, oid', 'length', 'max'=>16),
			array('model, manufacturer', 'length', 'max'=>64),
			array('price', 'length', 'max'=>12),
			array('create_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('od_id, oid, model, quantity, manufacturer, price, create_time, status', 'safe', 'on'=>'search'),
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
			'od_id' => '订单详情ID',
			'oid' => '订单详情ID',
			'model' => '型号',
			'quantity' => '数量',
			'manufacturer' => '厂商',
			'price' => '价格',
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

		$criteria->compare('od_id',$this->od_id,true);
		$criteria->compare('oid',$this->oid,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('manufacturer',$this->manufacturer,true);
		$criteria->compare('price',$this->price,true);
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
	 * @return OrderDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
