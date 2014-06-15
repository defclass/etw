<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property string $pid
 * @property string $cid
 * @property string $bid
 * @property string $model
 * @property string $package
 * @property string $RoHS
 * @property string $datecode
 * @property integer $quantity
 * @property string $direction
 * @property string $image_url
 * @property string $create_time
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Classify $c
 * @property Brand $b
 */
class Product extends CActiveRecord
{
    public $classify;

    public $brand;


    /* 搜索中存储按首字母搜索的字段 */

    public $index_search;
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{product}}';
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
            array('classify, brand', 'numerical', 'integerOnly'=>true),
			array('pid, cid, bid', 'length', 'max'=>16),
			array('model, package, RoHS, datecode, direction', 'length', 'max'=>64),
            array('image_url', 'length', 'max'=>256),
            array('index_search', 'length', 'max'=>1),
			array('create_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pid, cid, bid, model, package, RoHS, datecode, quantity, direction,image_url, create_time, status', 'safe', 'on'=>'search'),
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
			'c' => array(self::BELONGS_TO, 'Classify', 'cid'),
			'b' => array(self::BELONGS_TO, 'Brand', 'bid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pid' => '产品ID',
			'cid' => '产品分类',
			'bid' => '产品品牌',
            'classify'=>'产品分类',
            'brand' =>'产品品牌',
			'model' => '型号',
			'package' => '封装',
			'RoHS' => 'RoHS',
			'datecode' => '批号',
			'quantity' => '数量',
			'direction' => '注释',
            'image_url' => '产品图片地址',
			'create_time' => '创建时间',
			'status' => '显示状态',
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
        
        $criteria->with=array('c','b');
		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('t.cid',$this->cid,true);
		$criteria->compare('t.bid',$this->bid,true);

        $criteria->compare('c.classify_name',$this->classify,true);
		$criteria->compare('b.brand_name',$this->brand,true);
        
        $criteria->addCondition('model LIKE :i and model REGEXP :j');
        $criteria->params[':i'] = "%".$this->index_search."%";
        $criteria->params[':j'] = "^".$this->index_search;

        
		$criteria->compare('model',$this->model,true);
		$criteria->compare('package',$this->package,true);
		$criteria->compare('RoHS',$this->RoHS,true);
		$criteria->compare('datecode',$this->datecode,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('direction',$this->direction,true);
        $criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

/** 
 * @todo 没有带搜索的所有数据
 * 
 * @return CActiveDataProvider
 */
    public function all_product() {
        $criteria = new CDbCriteria;
        $criteria->with=array('c','b');
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
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
