<?php

class frequenciaTest extends WebTestCase
{
	public $fixtures=array(
		'frequencias'=>'frequencia',
	);

	public function testShow()
	{
		$this->open('?r=frequencia/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=frequencia/create');
	}

	public function testUpdate()
	{
		$this->open('?r=frequencia/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=frequencia/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=frequencia/index');
	}

	public function testAdmin()
	{
		$this->open('?r=frequencia/admin');
	}
}
