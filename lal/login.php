<?php
	require_once ('include\MysqliDb.php');
	require 'session.inc.php';

if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

	$db = new MysqliDb ('localhost', 'root', '', 'fitness');
	
	$username = $db->rawQuery('SELECT username FROM users');
	$password = $db->rawQuery('SELECT password FROM users');

	if($_REQUEST['username'] === $username && $_REQUEST['password'] === $password) {
		$_SESSION['username'] = $_REQUEST['username'];

		header("Location: /lal/lal.php");
	} else {
		echo "gori6";
	}
}	
?>

<html>
	<head>
		<title>Login</title>
		<link href="lol.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<form action ="" method="POST">
			<input type="text" class="field" name="username" value="" placeholder="Enter your username" >
			
			<input type="password" class="field" name="password" value="" placeholder="Enter your password" >
			
			<input type ="submit" class="field button" name="loginbutton" value="Login">
		</form>
	</body>
</html>