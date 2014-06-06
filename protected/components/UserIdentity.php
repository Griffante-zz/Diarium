<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	
	private $_id;
	
	public function authenticate()
	{
		$record=user::model()->findByAttributes(array('username'=>$this->username));
		
		if($record===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($record->password!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$record->id;
			$this->setNome($record->tipo);
			$auth=Yii::app()->authManager;
			if(!$auth->isAssigned($record->tipo,$this->_id))
			{
				if($auth->assign($record->tipo,$this->_id))
				{
					Yii::app()->authManager->save();
				}
			}
			
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	
	public function getId()
	{
		return $this->_id;
	}
	
	public function setNome($tipo){
		if($tipo == 'professor'){
			$professor = professor::model()->findByPk($this->getId());	
			$nome = explode(' ', $professor->nome);
			$this->setState('nome', $nome[0]);
			
		}
		elseif ($tipo == 'secretario'){
			$secretario = secretario::model()->findByPk($this->getId());
			$nome = explode(' ', $secretario->nome);
			$this->setState('nome', $nome[0]);
		}
		elseif ($tipo == 'aluno'){
			$aluno = aluno::model()->findByPk($this->getId());
			$nome = explode(' ', $aluno->nome);
			$this->setState('nome', $nome[0]);
		}
		else{
			$this->setState('nome', $tipo);
		}
		$this->setState('role', $tipo);
	}
	
	/* public function authenticate()
	{
		
		
		
		$users=array(
				// username => password
				'demo'=>'demo',
				'admin'=>'admin',
		);
		
		$dataArray = user::model()->search()->getData();
		foreach($dataArray as $data){
			$users[$data->username] = $data->password;
		}
		
		
		
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	} */
}