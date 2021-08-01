<?php

//databse connection  

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "database1";

$dsn = "mysql:host=".$servername.";dbname=".$dbname;
	
$conn = new PDO($dsn, $username, $password);

$loginName = "Membru";


/* 		$stmt = $conn->query("SELECT * FROM users WHERE usersNames = '$loginName'");

		$stmt->bindParam($loginName, $usersNames);
		$stmt->execute();
		echo $stmt->rowCount(); */
		
		$stmt = $conn->query("SELECT * FROM users WHERE usersNames = '$loginName'");
		$result = $stmt->fetch(PDO::FETCH_OBJ);
		$finalResult = $result->password;
		
		$pwdCheck = password_verify("orga", $finalResult);
		
		if($pwdCheck == false){echo "Its not working";} else {echo "The pass its a match";}
		//echo $result->password;
?>