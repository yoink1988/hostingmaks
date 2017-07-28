<?php
class Postgresql implements iWorkData
{
	private $link;
	private function getConnect()
	{
		if($this->link !=null)
		{
			return $this->link;
		}
		if($this->link = pg_connect("host=".POSTGRE_HOST.
								", dbname=".POSTGRE_DB_NAME.
								  ", user=".POSTGRE_USER.
							  ", password=".POSTGRE_PASS))
		{
			return $this->link;
		}
	}
	
    public function saveData($key, $val)
    {
        $val = pg_escape_string($val);
        $params = array('key'=> $key, 'data' => $val);
		$query = 'REPLACE '.POSTGRE_TABLE_NAME." set ";
				foreach($params as $k => $v)
				{
					$query .= "`{$k}` = '{$v}', ";
				}
				$query = substr($query, 0, -2);
		echo $query;
		if (pg_query($query, $this->getConnect()))
		{
			return "запись добавлена";
		}
		else(pg_error($this->getConnect()));
    }



    public function getData($key)
	{
		$query = "SELECT `key`, `data` from ".POSTGRE_TABLE_NAME. " where "
													. "`key` = '{$key}'";
			$result=  array();
			if(!$stmt = pg_query($query, $this->getConnect()))
			{
				return false;
			}
			while($res = pg_fetch_array($stmt, MYSQL_ASSOC))
			{
				$result[]=$res;
			}
			return $result;
	}

    public function deleteData($key)
	{
		$query = "DELETE from ".POSTGRE_TABLE_NAME." where `key` = '{$key}'";

		if(pg_query($query, $this->getConnect()))
		{
			return pg_affected_rows($this->getConnect()). " row deleted";
		}
		else
		{
			return false;
		}
	}


	public function __construct(){}

}
