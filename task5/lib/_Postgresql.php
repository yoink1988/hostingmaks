<?php


class Postgresql extends Db
{

	private function getConnect()
	{

	if($this->link !=null)
	{
		return $this->link;
	}
	if($this->link = pg_connect("host=localhost, dbname=, user=, password=" ))
	{
		return $this->link;
	}
//		if($this->link != null)
//		{
//			return $this->link;
//		}
//		if($this->link = mysql_connect('localhost', 'root', ''))
//		{
//			mysql_select_db('test');
//			return $this->link;
//		}
	}



	public function exec()
	{
		parent::exec();

		switch ($this->queryType)
		{
			case 'insert':
				if(!pg_query($this->query, $this->getConnect()))
				{
					return false;
				}
				return SUCCESS;

			case 'update':
				if(!pg_query($this->query, $this->getConnect()))
				{
					return false;
				}
				return SUCCESS;
			case 'select':
				$result=  array();
				if(!$stmt = pg_query($this->query, $this->getConnect()))
				{
					return false;
				}
				while($res = pg_fetch_array($stmt, MYSQL_ASSOC))
				{
					$result[]=$res;
				}
				return $result;

			case 'delete':

				if(pg_query($this->query, $this->getConnect()))
				{
					return pg_affected_rows($this->getConnect()). " row deleted";
				}
				else
				{
					return false;
				}
		}

	}










	public function __construct(){}
}
