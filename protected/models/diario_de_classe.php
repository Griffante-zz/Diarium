<?php

/**
 * This is the model class for table "diario_de_classe".
 *
 * The followings are the available columns in table 'diario_de_classe':
 * @property integer $id
 * @property string $periodo
 * @property string $etapa
 * @property integer $turma
 */
class diario_de_classe extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diario_de_classe';
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
			array('id, turma', 'numerical', 'integerOnly'=>true),
			array('periodo, etapa', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, periodo, etapa, turma', 'safe', 'on'=>'search'),
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
			'aulas' => array(self::HAS_MANY, 'aula', 'diario'),
			'turma0' => array(self::BELONGS_TO, 'Turma', 'turma'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'periodo' => 'Periodo',
			'etapa' => 'Etapa',
			'turma' => 'Turma',
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

		$criteria->compare('periodo',$this->periodo,true);

		$criteria->compare('etapa',$this->etapa,true);

		$criteria->compare('turma',$this->turma);

		return new CActiveDataProvider('diario_de_classe', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return diario_de_classe the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}