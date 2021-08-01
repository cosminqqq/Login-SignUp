<?php


if(isset($_POST['signup-submit']))
{
	$msg = "";
	include_once 'dbh.inc.php';
	include_once 'user.inc.php';
		
		$name = $_POST['uid'];
		$eMail = $_POST['mail'];
		$password = $_POST['password'];
		$cPassword = $_POST['cPassword'];
		$user = new User;
		
		if($password != $cPassword) {
			$msg = "Please Check Your Password";
			} else {
			$hash = password_hash($password, PASSWORD_BCRYPT); 
			$user->signUp($name, $eMail, $hash);
			$msg = "You have been registered";
		}
		echo $name .'<br>'. $eMail.'<br>'. $hash;
		
}

?> 













