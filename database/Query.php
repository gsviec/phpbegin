<?php

/**
* 
*/
class Query 
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	public function getAllData($table)
	{
		$sql = "SELECT * FROM $table";
		$result = $this->pdo->query($sql);

		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getOne($table)
	{
		$sql = "SELECT * FROM $table";
		$result = $this->pdo->query($sql);

		return $result->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($table, $pdo)
	{

	}
}

//$q = new Query();