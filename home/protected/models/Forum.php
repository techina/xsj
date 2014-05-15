<?php

/**
 * This is the model class for table "xsj_forum".
 *
 * The followings are the available columns in table 'xsj_forum':
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string $username
 * @property string $ftime
 * @property integer $istop
 */
class Forum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'xsj_forum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('istop', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('username', 'length', 'max'=>50),
			array('content, ftime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, content, username, ftime, istop', 'safe', 'on'=>'search'),
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
		'userpic'=>array(self::BELONGS_TO, 'Users', 'username'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'content' => 'Content',
			'username' => 'Username',
			'ftime' => 'Ftime',
			'istop' => 'Istop',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('ftime',$this->ftime,true);
		$criteria->compare('istop',$this->istop);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Forum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
