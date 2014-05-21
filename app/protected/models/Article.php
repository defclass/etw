<?php

/**
 * This is the model class for table "br_article".
 *
 * The followings are the available columns in table 'br_article':
 * @property string $id
 * @property integer $category_id
 * @property string $headline
 * @property string $author
 * @property string $date
 * @property integer $isstatic
 * @property string $content
 * @property string $clicount
 * @property string $keyword
 * @property string $status
 * @property integer $order
 */
class Article extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'br_article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('category_id, isstatic, order', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>16),
			array('headline', 'length', 'max'=>128),
			array('author', 'length', 'max'=>32),
			array('date, clicount', 'length', 'max'=>10),
			array('keyword', 'length', 'max'=>50),
			array('status', 'length', 'max'=>5),
			array('content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, headline, author, date, isstatic, content, clicount, keyword, status, order', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'category_id' => '文章分类ID',
			'headline' => '标题',
			'author' => 'Author',
			'date' => '日期',
			'isstatic' => '是否伪静态',
			'content' => '正文',
			'clicount' => '点击数',
			'keyword' => '文章关键词',
			'status' => '文章状态',
			'order' => '排序',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('headline',$this->headline,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('isstatic',$this->isstatic);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('clicount',$this->clicount,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('order',$this->order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
