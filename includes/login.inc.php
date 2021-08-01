<?php

 	include_once 'dbh.inc.php';
	include_once 'user.inc.php';
 	
	if(isset($_POST['login-submit'])) { 
	
	$uid = $_POST['mailuid'];
	$password = $_POST['password'];
	
  	$object = new User;

	if($object->getAllUsers($uid) > 0) { 
	
		$checkPass = password_verify($password, $object->getPassword($uid));
		if($checkPass == false) {echo "The name or pass are incorrect";} else {echo "Welcome ". $uid."<br>You have successfully connected";}
	
	}		
}

?>