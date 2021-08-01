<?php
	include_once 'includes/dbh.inc.php';
	include_once 'includes/user.inc.php';
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dasd</title>

	<link rel="stylesheet" href="style-sign-system.css">
</head>

<body>
<header>
	<nav>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Stats</a></li>
			<li><a href="">Purchase</a></li>
			<li><a href="">Deal</a></li>
			<li><a href="">About us</a></li>
		</ul>
	</nav>

		<div class='login-part'>
			<form action="includes/login.inc.php" method="post">
				<input type='text' name='mailuid' placeholder='Username/E-mail...'>
				<input type='password' name='password' placeholder='Password...'>
				<button class="btn" type="submit" name="login-submit">Login</button>
				<a href="signup.php" class="sign-up">Sign up</a>
			</form>

		</div>

		<?php
	
	?>


</header>


</body>

</html>