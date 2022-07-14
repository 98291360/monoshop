<?php 
class DB{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'monoshop';
	private $db;

	public function __construct($host = null,
	                   $username = null,
	                   $password = null ,
	                   $database = null){

		if($host != null){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}//fin if

		try {
			$this->$db = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username, $this->password,
	                   array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
	                         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

		} catch (PDOException $e) {
			die('<h1>Impossible de se connecter à la base de donné </h1>');
		}
	}

}