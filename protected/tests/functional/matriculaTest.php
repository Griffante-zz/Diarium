<?php

class matriculaTest extends WebTestCase
{
	public $fixtures=array(
		'matriculas'=>'matricula',
	);

	public function testShow()
	{
		$this->open('?r=matricula/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=matricula/create');
	}

	public function testUpdate()
	{
		$this->open('?r=matricula/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=matricula/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=matricula/index');
	}

	public function testAdmin()
	{
		$this->open('?r=matricula/admin');
	}
}
