<?php

/**
* 
*/
class Connection
{
	
	public static function make($config)
	{
		//new PDO('mysql:host=hostname;dbname=database', 'username', 'password')
		try {
			return new PDO(
				$config['dsn'] . ';dbname=' .$config['name'],
				$config['username'],
				$config['password']
			);

		} catch (Exception $e) {
			die('Could not conect mysql');
		}

	}
	public function setDatabaseAdapter()
	{
		//Mysql

		//NoSQl

		//
	}
}


// $pdo = new Connection();
// $pdo->make();


// $pdo = Connection::make();