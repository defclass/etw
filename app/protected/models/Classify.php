<?php

/**
 * This is the model class for table "{{classify}}".
 *
 * The followings are the available columns in table '{{classify}}':
 * @property string $cid
 * @property string $classify_name
 *
 * The followings are the available model relations:
 * @property Product[] $products
 */
class Classify extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{classify}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid, classify_name', 'required'),
			array('cid', 'numerical', 'max'=>16),
			array('classify_name', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cid, classify_name', 'safe', 'on'=>'search'),
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
			'products' => array(self::HAS_MANY, 'Product', 'cid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cid' => '分类ID',
			'classify_name' => '分类名',
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

		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('classify_name',$this->classify_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /** 
     * @todo 获取所有产品分类
     * 
     * @return array id=>name
     */
    public function  get_classify(){
        $command = Yii::app()->db->createCommand();
        $data = $command->select('cid,classify_name')
                        ->from('{{classify}}')
                        ->queryAll();
        $container = array(0=>'请选择产品分类');
        foreach($data as $row){
           $key = $row['cid'];
           $value = $row['classify_name'];
           $container[$key] = $value;
       }
       return $container;
    }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Classify the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
