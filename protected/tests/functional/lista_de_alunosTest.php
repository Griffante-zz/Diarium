<?php

class lista_de_alunosTest extends WebTestCase
{
	public $fixtures=array(
		'lista_de_alunoses'=>'lista_de_alunos',
	);

	public function testShow()
	{
		$this->open('?r=lista_de_alunos/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=lista_de_alunos/create');
	}

	public function testUpdate()
	{
		$this->open('?r=lista_de_alunos/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=lista_de_alunos/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=lista_de_alunos/index');
	}

	public function testAdmin()
	{
		$this->open('?r=lista_de_alunos/admin');
	}
}
