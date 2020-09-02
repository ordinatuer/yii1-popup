<?php

/**
 * This is the model class for table "popups".
 *
 * The followings are the available columns in table 'popups':
 * @property integer $pu_id
 * @property string $name
 * @property string $text
 * @property integer $show
 * @property integer $counter
 */
class Popups extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'popups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, text', 'required'),
			array('show, counter', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('text', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pu_id, name, text, show, counter', 'safe', 'on'=>'search'),
		);
	}

	public function scopes() {
		return array(
			'showed' => array(
				'condition' => '`show` = 1',
			),
		);
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pu_id' => 'Идентификатор',
			'name' => 'Название',
			'text' => 'Основной текст',
			'show' => 'Активен',
			'counter' => 'Всего показов',
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

		$criteria->compare('pu_id',$this->pu_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('show',$this->show);
		$criteria->compare('counter',$this->counter);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Popups the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
