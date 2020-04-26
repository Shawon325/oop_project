<?php

class Database
{
	private $server_name = SERVER_NAME;
	private $user_name = USER_NAME;
	private $password = PASSWORD;
	private $database_name = DB_NAME;
	public $db;

	public function __construct()
	{
		$this->connection();
	}

	private function connection()
	{
		$this->db = new mysqli($this->server_name, $this->user_name, $this->password, $this->database_name);
		if(!$this->db) {
			die("Database Connecttion Peoblem".__LINE__);
		}
	}

	public function select($table,$condition)
	{
		$query="SELECT * FROM $table WHERE $condition";
		$select=$this->db->query($query) or die("ERROR".__LINE__);
		if($this->db->affected_rows>0)
		{
			return $select;
		}
		else
		{
			return false;
		}
	}
}