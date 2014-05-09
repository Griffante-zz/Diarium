<?php

/**
 * This is the model class for table "aula".
 *
 * The followings are the available columns in table 'aula':
 * @property integer $id
 * @property string $conteudo
 * @property string $data
 * @property integer $diario
 * @property integer $horario
 */
class aula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aula';
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
			array('id, diario, horario', 'numerical', 'integerOnly'=>true),
			array('conteudo, data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, conteudo, data, diario, horario', 'safe', 'on'=>'search'),
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
			'diario0' => array(self::BELONGS_TO, 'Diario_De_Classe', 'diario'),
			'frequencias' => array(self::HAS_MANY, 'Frequencia', 'aula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'conteudo' => 'Conteudo',
			'data' => 'Data',
			'diario' => 'Diario',
			'horario' => 'Horario',
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

		$criteria->compare('conteudo',$this->conteudo,true);

		$criteria->compare('data',$this->data,true);

		$criteria->compare('diario',$this->diario);

		$criteria->compare('horario',$this->horario);

		return new CActiveDataProvider('aula', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return aula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}