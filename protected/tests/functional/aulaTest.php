<?php

class aulaTest extends WebTestCase
{
	public $fixtures=array(
		'aulas'=>'aula',
	);

	public function testShow()
	{
		$this->open('?r=aula/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=aula/create');
	}

	public function testUpdate()
	{
		$this->open('?r=aula/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=aula/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=aula/index');
	}

	public function testAdmin()
	{
		$this->open('?r=aula/admin');
	}
}
