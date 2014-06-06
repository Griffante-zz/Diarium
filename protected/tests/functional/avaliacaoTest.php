<?php

class avaliacaoTest extends WebTestCase
{
	public $fixtures=array(
		'avaliacaos'=>'avaliacao',
	);

	public function testShow()
	{
		$this->open('?r=avaliacao/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=avaliacao/create');
	}

	public function testUpdate()
	{
		$this->open('?r=avaliacao/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=avaliacao/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=avaliacao/index');
	}

	public function testAdmin()
	{
		$this->open('?r=avaliacao/admin');
	}
}
