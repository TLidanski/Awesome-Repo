<?php
	require '\include\MysqliDb.php';
	require 'session.inc.php';

if(isset($_POST['regbutton'])) {
	if($_POST['email'] != '' && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['confirm'] != '' ) {
		if($_POST['password'] == $_POST['confirm']) {
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$db = new MysqliDb ('localhost', 'root', '', 'fitness');	
				$email = $_POST['email'];
				$username = $_POST['username'];
				$password = $_POST['password'];


				$password = md5($password);

				$query = Array('email' => $email,
								'username' => $username,
								'password' => $password
				);
				$id = $db -> insert ('users', $query);
				header("Location: /lal/lal.php");

			} else {
				$error_msg = "Please enter a valid e-mail";
			}	
		} else {
			$error_msg = "You need to confirm your password";
		}	
	}	else {
		$error_msg = "You need to enter an e-mail,username and password!";
	}	
}
		

?>

<html>
	<head>
		<title>Register</title>
		<link href="lol.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
<?php if(isset($error_msg)) { ?>
	<div class="alert">	
		<?php echo $error_msg; ?>
	</div>
<?php } ?>		
	<form action ="" method="POST">
			<div class="top">
				<input type="text" class="field" name="email" value="" placeholder="Enter your e-mail" >
			
				<input type="text" class="field" name="username" value="" placeholder="Enter your username" >
			</div>	
			<div class="bottom">
			
				<input type="password" class="field" name="password" value="" placeholder="Enter your password" >
				
				<input type="password" class="field" name="confirm" value="" placeholder="Confirm your password" >
			</div>
			
			<input type ="submit" class="field button" name="regbutton" value="Register">
	
	</form>
			
	</body>
</html>