<?php

/**
 * This is the model class for table "lista_de_alunos".
 *
 * The followings are the available columns in table 'lista_de_alunos':
 * @property integer $id
 * @property integer $Turma
 * @property string $Aluno
 * @property integer $numero
 */
class lista_de_alunos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lista_de_alunos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id', 'required'),
			array('id, Turma, numero', 'numerical', 'integerOnly'=>true),
			array('Aluno', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Turma, Aluno, numero', 'safe', 'on'=>'search'),
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
			'aluno' => array(self::BELONGS_TO, 'Aluno', 'Aluno'),
			'turma' => array(self::BELONGS_TO, 'Turma', 'Turma'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'Turma' => 'Turma',
			'Aluno' => 'Aluno',
			'numero' => 'Numero',
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

		$criteria->compare('Turma',$this->Turma);

		$criteria->compare('Aluno',$this->Aluno,true);

		$criteria->compare('numero',$this->numero);

		return new CActiveDataProvider('lista_de_alunos', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return lista_de_alunos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}