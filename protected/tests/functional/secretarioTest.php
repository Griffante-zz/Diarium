<?php

class secretarioTest extends WebTestCase
{
	public $fixtures=array(
		'secretarios'=>'secretario',
	);

	public function testShow()
	{
		$this->open('?r=secretario/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=secretario/create');
	}

	public function testUpdate()
	{
		$this->open('?r=secretario/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=secretario/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=secretario/index');
	}

	public function testAdmin()
	{
		$this->open('?r=secretario/admin');
	}
}
