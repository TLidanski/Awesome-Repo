<?php
	require 'include\session.inc.php';
	require 'include\db.php';


if(isset($_REQUEST['loginbutton'])) {
	if($_REQUEST['username'] != '' && $_REQUEST['password'] != '') {

				$password = md5($_REQUEST['password']);

				$result = mysql_query("SELECT * FROM users WHERE username = '$_REQUEST[username]' AND password = '$password'");
				$row = mysql_num_rows($result);

				if($row == 1) {
							$_SESSION['username'] = $_REQUEST['username'];

							header("Location: /lal/main.php");
				} else {
							$error_msg = "You have entered an incorrect username or password";
				}

		
	} else {
		$error_msg = "Please enter your username and password";
	}
}		
?>

<html>
	<head>
		<title>Login</title>
		<link href="lol.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<?php if(isset($error_msg)) { ?>
			<div class="alert">	
				<?php echo $error_msg; ?>
			</div>
		<?php } ?>		

		<form action ="" method="POST">
			<input type="text" class="field" name="username" value="" placeholder="Enter your username" >
			
			<input type="password" class="field" name="password" value="" placeholder="Enter your password" >
			
			<input type ="submit" class="field button" name="loginbutton" value="Login">
		</form>
	</body>
</html>