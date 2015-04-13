<?php
	require_once ('include\MysqliDb.php');
	require 'session.inc.php';
	$db = new MysqliDb ('localhost', 'root', '', 'fitness');
	
?>	

<html>
	<head>
		<title>Calorie Calculator</title>
		<link href="calc.css" rel="stylesheet" type="text/css">	
		<link href="1140.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="header">
				<img src="images/gym.png" alt="Fuark" class="logo">
				<a href="register.php" id="link">Register</a>
				
				<a href="login.php" id="link">Login</a>
				
		</div>
		

		<div class="container-top">
				<div class="top">
					<p>Yestee <br> v toq sait <br> 6te se nau4ite <br> kak da stanete <br> nacepeni batki</p>
				</div>
		</div>
		<div class="cotainer-bottom">		
				<div class="bottom">
					<p>V nego su6to taka ima<br>KALKULATOR ZA KALORII</p>
				</div>
		</div>
	</body>
</html>