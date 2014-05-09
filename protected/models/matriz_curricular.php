<?php

/**
 * This is the model class for table "matriz_curricular".
 *
 * The followings are the available columns in table 'matriz_curricular':
 * @property integer $id
 * @property integer $curso
 * @property integer $disciplina
 */
class matriz_curricular extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matriz_curricular';
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
			array('id, curso, disciplina', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, curso, disciplina', 'safe', 'on'=>'search'),
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
			'disciplina0' => array(self::BELONGS_TO, 'Disciplina', 'disciplina'),
			'curso0' => array(self::BELONGS_TO, 'Curso', 'curso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'curso' => 'Curso',
			'disciplina' => 'Disciplina',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('curso',$this->curso);

		$criteria->compare('disciplina',$this->disciplina);

		return new CActiveDataProvider('matriz_curricular', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return matriz_curricular the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}