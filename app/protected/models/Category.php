<?php

/**
 * This is the model class for table "br_category".
 *
 * The followings are the available columns in table 'br_category':
 * @property integer $cid
 * @property string $name
 * @property integer $fid
 * @property string $issingle
 */
class Category extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			/* array('cid', 'required'), */
			array('cid, fid', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>30),
			array('issingle', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cid, name, fid, issingle', 'safe', 'on'=>'search'),
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
			'cid' => '文章分类ID',
			'name' => '分类名',
			'fid' => '上线分类ID',
			'issingle' => '是否单页显示',
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

		$criteria->compare('cid',$this->cid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('fid',$this->fid);
		$criteria->compare('issingle',$this->issingle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    /** 
     * @todo 获取分类名
     * 
     * @return 
     */
    public function get_fid_name($fid){
        if($fid == 0)
            return "Already top category";
        $command = Yii::app()->db->createCommand();
        /* 取出所有属于该用户的所有customer记录 */
        $datas = $command->select('cid,name')
                         ->from('{{category}}')
                         ->queryAll();
        $container = array();
        foreach($datas as $data){
            $key = $data['cid'];
            $value = $data['name'];
            $container[$key] = $value;
        }
        return $container[$fid];
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
