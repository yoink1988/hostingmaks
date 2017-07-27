<?php
class FileEditor
{
	private $file;
	private $arrayStrings;

	public function __construct($filePath)
	{
		if(file_exists($filePath))
		{
			$this->file = $filePath;
			$this->arrayStrings = explode("\r\n", file_get_contents($filePath));
		}
	}



	public function setFile($path)
	{
		$this->file = $filepath;
		$this->arrayStrings = explode("\r\n", file_get_contents($this->file));
	}
	public function getFile()
	{
		return $this->file;
	}

	public function setArrayStrings($array)
	{
		$this->$arrayStrings = $array;
	}

	public function display()
	{
		return implode("<br>", $this->arrayStrings);
	}

	private function getCountStrings()
	{
		return count($this->arrayStrings);
	}

	public function readString($stringNumber)
	{
		if($stringNumber <= $this->getCountStrings())
		{
			return $this->arrayStrings[$stringNumber -1];
		}
		return false;
	}

	public function readChar($lineNum, $charNum)
	{
		$char = $charNum - 1;
		if($line = $this->readString($lineNum))
		{
			if(isset($line[$char]))
			{
				return $line[$char];
			}
			return NO_CHAR;
		}
		return NO_STRING;
	}

	public function writeString($lineNum, $string)
	{
		$line=$lineNum -1;
		for($i=0; $i<= $line; $i++)
		{
			if(empty($this->arrayStrings[$i]))
			{
				$this->arrayStrings[$i] = "";
			}
			if($i == $line)
			{
				$this->arrayStrings[$i] = $string;
				$this->save();
				return SUCCESS;
			}
		}
	}

	public function writeChar($lineNum, $charNum, $char)
	{
		$line=$lineNum -1;
		$Num = $charNum -1;
		for($i=0; $i <= $line; $i++)
		{
			if(empty($this->arrayStrings[$i]))
			{
				$this->arrayStrings[$i] = "";
			}
			if($i == $line)
			{
				$this->arrayStrings[$i][$Num] = $char;
				$this->save();
				return SUCCESS;
			}
		}
	}

	private function save()
	{
		file_put_contents($this->file, implode("\r\n", $this->arrayStrings));
	}
}

?>



