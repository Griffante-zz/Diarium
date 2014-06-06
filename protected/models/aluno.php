<?php

/**
 * This is the model class for table "aluno".
 *
 * The followings are the available columns in table 'aluno':
 * @property integer $id
 * @property string $matricula
 * @property string $nome
 * @property string $endereco
 * @property string $dataNascimento
 */
class aluno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aluno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(array('matricula', 'nome'),'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('matricula', 'length', 'max'=>20),
			array('nome, endereco', 'length', 'max'=>200),
			array('dataNascimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, matricula, nome, endereco, dataNascimento', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'User', 'id'),
			'avaliacao_alunos' => array(self::HAS_MANY, 'AvaliacaoAluno', 'aluno'),
			'frequencias' => array(self::HAS_MANY, 'Frequencia', 'aluno'),
			'lista_de_alunoses' => array(self::HAS_MANY, 'ListaDeAlunos', 'Aluno'),
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'aluno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'matricula' => 'Matrícula',
			'nome' => 'Nome',
			'endereco' => 'Endereço',
			'dataNascimento' => 'Data de Nascimento',
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

		$criteria->compare('matricula',$this->matricula,true);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('endereco',$this->endereco,true);

		$criteria->compare('dataNascimento',$this->dataNascimento,true);

		return new CActiveDataProvider('aluno', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return aluno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}