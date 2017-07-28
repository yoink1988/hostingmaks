<?php
//include_once __DIR__ . "/iBand.php";
class Band implements iBand
{
	protected $name = '';
	public $musicians = array();
	protected $genre = '';
	public $bandInfo = array();

	public function getName()
	{
		return $this->name;
	}

	public function getGenre()
	{
		return $this->genre;
	}
	public function setGenre($genre)
	{
		$this->genre = $genre;
	}

	public function addMusician(iMusician $obj)
	{
		$musName = $obj->getName();
		$this->musicians[$musName] = $obj;
		$this->musicians[$musName]->assingToBand(new Band($this->getName()));
	}

		public function getMusician()
	{
		$musiciants = array();
		foreach ($this->musicians as $musician)
		{

			$musiciants[$musician->getName()] ['role'] = $musician->getMusicianType();
		 	$musiciants[$musician->getName()] ['name'] = $musician->getName();
			$musiciants[$musician->getName()] ['instrument'] = $musician->getInstrument();
			$musiciants[$musician->getName()] ['plays in'] = $musician->getBand();
		}

		return $musiciants;
	}

//	public function getMusician()
//	{
//		$info = '';
//		foreach ($this->musicians as $musician)
//		{
//			$info .=$musician->getMusicianType()." ";
//		 	$info .=$musician->getName()." играет на ";
//			$info .=$musician->getInstrument();
//		}
//
//		return $info;
//	}

	public function getBandInfo()
	{
		$this->bandInfo['name'] = $this->getName();
		$this->bandInfo['genre'] = $this->getGenre();
		$this->bandInfo['musiciants'] = $this->getMusician();
		return $this->bandInfo;
	}

	
	public function __construct($name)
	{
		$this->name = $name;
	}
}
