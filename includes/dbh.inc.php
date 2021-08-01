<?php

class Dbh {
	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $charset;
	
	public function connect () {
	  $this->servername = "localhost";
	  $this->username = "root";
	  $this->password = "";
	  $this->dbname = "database1";
	  $this->charset = "utf8mb4";
	  
	  try {
	  $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
	  $conn = new PDO($dsn, $this->username, $this->password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  return $conn;  
	  } catch (PDOException $e) {
		  echo "Connection failed: ".$e->getMessage();
	}
  }	
}