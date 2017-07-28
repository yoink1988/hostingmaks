<?php

//include_once __DIR__ . "/iMusician.php";
class Musician implements iMusician
{
	protected $name = '';
	protected $instrument = array();
	protected $band = array();
	protected $muzType = '';


	public function addInstrument(iInstrument $obj)
	{
		$this->instrument[]=$obj;
	}

		public function getInstrument()
	{
		$instruments = array();
		foreach ($this->instrument as $inst)
		{
			$instruments[$inst->getCategory()] = $inst->getName();
		}
		return $instruments;
	}


//	public function getInstrument()
//	{
//		$instruments = "";
//		foreach ($this->instrument as $inst)
//		{
//			$instruments .=$inst->getCategory()." - ".$inst->getName().", ";
//		}
//		$instruments = substr($instruments,0,-2);
//		$instruments .="<br>";
//		return $instruments;
//	}
//
	public function assingToBand(iBand $nameBand)
	{
		$name = $nameBand->getName();
		$this->band[$name] = $nameBand;
	}
	public function getMusicianType()
	{
		return $this->muzType;
	}

	public function getName()
	{
		return $this->name;
	}

		public function getBand()
	{
		$bands = array();
		foreach ($this->band as $band)
		{
			$bands[] = $band->getName();
		}
		return $bands;
	}

//	public function getBand()
//	{
//		$info = 'играет в группах : ';
//		foreach ($this->band as $band)
//		{
//			$info .=$band->getName().", ";
//		}
//		$info = substr($info,0,-2);
//		return $info;
//	}
//

	public function __construct($name, $muzType)
	{
		$this->name = $name;
		$this->muzType = $muzType;
	}
}
