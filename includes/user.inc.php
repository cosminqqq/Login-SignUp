<?php

class User extends Dbh {
	public function getAllUsers($loginName) {
		$stmt = $this->connect()->query("SELECT usersNames FROM users WHERE usersNames = '$loginName'");
		$stmt->bindParam($loginName, $usersNames);
		$stmt->execute();

		return $stmt->rowCount();
	}
	
	public function getAllEmails($loginEmail) {
		$stmt = $this->connect()->query("SELECT email FROM users WHERE email = '$loginEmail'");
		$stmt->bindParam($loginEmail, $email);
		$stmt->execute();
		
		return $stmt->rowCount();
	}
	
	public function getPassword($loginName) {
		$stmt = $this->connect()->query("SELECT password FROM users WHERE usersNames = '$loginName'");
		$result = $stmt->fetch(PDO::FETCH_OBJ);
		
		return $result->password;
	}
	
	public function signUp($name, $email, $hash) {
		$stmt = $this->connect()->query("INSERT INTO users (usersNames, email, password) VALUES ('$name', '$email','$hash')");
		return $stmt;
	}
}


