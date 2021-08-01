<?php
 require "Page.php";
?>

<main>

	<div class="wrapper-main">
		<h1>Sign Up</h1>
		
		<form method="post" action="signup.php">

				<input type='text' name='uid' placeholder='Username'>
				<input type='text' name='mail' placeholder='E-mail'>
				<input type='password' name='password' placeholder='Password'>
				<input type='password' name='cPassword' placeholder='Repeat Password'>

				<button type="submit" name="signup-submit" class="sing-up">Signup</button>
		</form>
	</div>
</main>

<?php


if(isset($_POST['signup-submit']))
{
	$msg = "";
	include_once 'includes/dbh.inc.php';
	//include_once 'user.inc.php';
		
		$name = $_POST['uid'];
		$eMail = $_POST['mail'];
		$password = $_POST['password'];
		$cPassword = $_POST['cPassword'];
		$user = new User;
		

		if( empty($name) || empty($eMail) || empty($password) || empty($cPassword)) {
			$msg = "Make sure all fields are filled";
			echo "duda duda duda le";	
		} else if (!filter_var($eMail, FILTER_VALIDATE_EMAIL) && preg_match("[^[A-Za-z0-9_.]+$]", $name)) {
			$msg = "Make sure your email is valid";
			echo "mail and name";
		} else if ( $user->getAllUsers($name) > 0 ) {
			$msg = "Name already taken";
			echo "name check";
		} else if ( $user->getAllEmails($eMail) > 0) {
			$msg = "Email already taken";
			echo "mail check";
		}
		 else if($password != $cPassword || $password == $name ) {
			$msg = "Please Check Your Password";
			echo "pass check?";
			} else {
			$hash = password_hash($password, PASSWORD_BCRYPT); 
			$user->signUp($name, $eMail, $hash);
			$msg = "You have been registered";
			echo "User saved";
		}
	//		echo $name .'<br>'. $eMail.'<br>'. $hash;
		
}

?> 

