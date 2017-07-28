<?php

class Drumm implements iInstrument
{
	protected $name;
	protected $category;

	public function getName()
	{
		return $this->name;
	}

	public function getCategory()
	{
		return $this->category;
	}


	public function __construct($name)
	{
		$this->name = $name;
		$this->category = 'Drumms';
	}
}
