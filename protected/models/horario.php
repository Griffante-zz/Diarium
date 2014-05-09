<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property integer $id
 * @property integer $grade
 * @property string $dia
 * @property string $inicio
 * @property string $termino
 */
class horario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario';
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
			array('id, grade', 'numerical', 'integerOnly'=>true),
			array('dia', 'length', 'max'=>7),
			array('inicio, termino', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, grade, dia, inicio, termino', 'safe', 'on'=>'search'),
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
			'aulas' => array(self::HAS_MANY, 'Aula', 'horario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'grade' => 'Grade',
			'dia' => 'Dia',
			'inicio' => 'Início',
			'termino' => 'Término',
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

		//$criteria->compare('id',$this->id);

		$criteria->compare('grade', $this->grade);

		//$criteria->compare('dia',$this->dia,true);

		//$criteria->compare('inicio',$this->inicio,true);

		//$criteria->compare('termino',$this->termino,true);

		return new CActiveDataProvider('horario', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}