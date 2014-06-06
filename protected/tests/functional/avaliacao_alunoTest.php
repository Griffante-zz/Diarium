<?php

class avaliacao_alunoTest extends WebTestCase
{
	public $fixtures=array(
		'avaliacao_alunos'=>'avaliacao_aluno',
	);

	public function testShow()
	{
		$this->open('?r=avaliacao_aluno/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=avaliacao_aluno/create');
	}

	public function testUpdate()
	{
		$this->open('?r=avaliacao_aluno/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=avaliacao_aluno/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=avaliacao_aluno/index');
	}

	public function testAdmin()
	{
		$this->open('?r=avaliacao_aluno/admin');
	}
}
