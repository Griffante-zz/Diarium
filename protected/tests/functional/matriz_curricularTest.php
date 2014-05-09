<?php

class matriz_curricularTest extends WebTestCase
{
	public $fixtures=array(
		'matriz_curriculars'=>'matriz_curricular',
	);

	public function testShow()
	{
		$this->open('?r=matriz_curricular/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=matriz_curricular/create');
	}

	public function testUpdate()
	{
		$this->open('?r=matriz_curricular/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=matriz_curricular/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=matriz_curricular/index');
	}

	public function testAdmin()
	{
		$this->open('?r=matriz_curricular/admin');
	}
}
