<?php

class diario_de_classeTest extends WebTestCase
{
	public $fixtures=array(
		'diario_de_classes'=>'diario_de_classe',
	);

	public function testShow()
	{
		$this->open('?r=diario_de_classe/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=diario_de_classe/create');
	}

	public function testUpdate()
	{
		$this->open('?r=diario_de_classe/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=diario_de_classe/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=diario_de_classe/index');
	}

	public function testAdmin()
	{
		$this->open('?r=diario_de_classe/admin');
	}
}
