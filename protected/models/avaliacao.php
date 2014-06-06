<?php

/**
 * This is the model class for table "avaliacao".
 *
 * The followings are the available columns in table 'avaliacao':
 * @property integer $id
 * @property string $data
 * @property double $peso
 * @property integer $turma
 * @property integer $horario
 */
class avaliacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'avaliacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('turma, horario', 'required'),
			array('turma, horario', 'numerical', 'integerOnly'=>true),
			array('peso', 'numerical'),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data, peso, turma, horario', 'safe', 'on'=>'search'),
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
			'horario0' => array(self::BELONGS_TO, 'Horario', 'horario'),
			'turma0' => array(self::BELONGS_TO, 'Turma', 'turma'),
			'avaliacao_alunos' => array(self::HAS_MANY, 'Avaliacao_Aluno', 'avaliacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'data' => 'Data',
			'peso' => 'Peso',
			'turma' => 'Turma',
			'horario' => 'Horário',
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

		$criteria->compare('data',$this->data,true);

		$criteria->compare('peso',$this->peso);

		$criteria->compare('turma',$this->turma);

		$criteria->compare('horario',$this->horario);

		return new CActiveDataProvider('avaliacao', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return avaliacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}