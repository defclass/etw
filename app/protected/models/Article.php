<?php

/**
 * This is the model class for table "{{article}}".
 *
 * The followings are the available columns in table '{{article}}':
 * @property string $id
 * @property string $category_id
 * @property string $headline
  * @property string $article_image
 * @property string $author_id
 * @property string $date
 * @property integer $isstatic
 * @property string $content
 * @property string $clicount
 * @property string $keyword
 * @property integer $status
 * @property integer $order
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Admin $author
 */
class Article extends CActiveRecord
{
    /* 文章分类中的字段 */
    public $name;

    /* admin表中的字段 */
    public $login_name;
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{article}}';
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
			array('isstatic, status, order', 'numerical', 'integerOnly'=>true),
            array('id, author_id', 'length', 'max'=>16),
			array('category_id', 'length', 'max'=>20),
			array('headline,article_image', 'length', 'max'=>128),
			array('name', 'length', 'max'=>128),
			array('login_name', 'length', 'max'=>128),
			array('date, clicount', 'length', 'max'=>10),
			array('keyword', 'length', 'max'=>50),
			array('content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, headline, author_id, date, isstatic, content, clicount, keyword, status, order', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
            'author' => array(self::BELONGS_TO, 'Admin', 'author_id'),
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
			'author_id' => '作者',
            'article_image' => '文章所附图片',
			'date' => '日期',
			'isstatic' => '是否伪静态',
			'content' => '正文',
			'clicount' => '点击数',
			'keyword' => '文章关键词',
			'status' => '是否公开',
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
        $criteria->with=array('category','author');
        $criteria->compare('category.name',$this->name,true);
        $criteria->compare('author.login_name',$this->login_name,true);
        if(!empty($this->date)){
            $start_time = strtotime($this->date);
            $end_time = strtotime("+1 d", $start_time);
            $criteria->compare('date',">=$start_time",true);
            $criteria->compare('date',"<=$end_time",true);
        }
		$criteria->compare('id',$this->id,true);
        $criteria->compare('t.category_id',$this->category_id,true);
		$criteria->compare('headline',$this->headline,true);
        $criteria->compare('article_image',$this->article_image,true);
        $criteria->compare('author_id',$this->author_id,true);
		$criteria->compare('isstatic',$this->isstatic);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('clicount',$this->clicount,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('status',$this->status);


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
