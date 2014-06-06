<?php

/**
 * This is the model class for table "avaliacao_aluno".
 *
 * The followings are the available columns in table 'avaliacao_aluno':
 * @property integer $id
 * @property double $nota
 * @property integer $aluno
 * @property integer $avaliacao
 */
class avaliacao_aluno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'avaliacao_aluno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aluno, avaliacao', 'required'),
			array('aluno, avaliacao', 'numerical', 'integerOnly'=>true),
			array('nota', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nota, aluno, avaliacao', 'safe', 'on'=>'search'),
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
			'aluno0' => array(self::BELONGS_TO, 'Aluno', 'aluno'),
			'avaliacao0' => array(self::BELONGS_TO, 'Avaliacao', 'avaliacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'nota' => 'Nota',
			'aluno' => 'Aluno',
			'avaliacao' => 'Avaliacao',
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

		$criteria->compare('nota',$this->nota);

		$criteria->compare('aluno',$this->aluno);

		$criteria->compare('avaliacao',$this->avaliacao);

		return new CActiveDataProvider('avaliacao_aluno', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return avaliacao_aluno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}