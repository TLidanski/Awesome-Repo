<?php
	require '\include\mysql_db.class.php';
	require 'include\session.inc.php';
	require 'include\db.php';

	error_reporting(0);  //Escapes the notice the below query brings up
	$checker = mysql_query("SELECT * FROM users WHERE email = '$_REQUEST[email]' OR username = '$_REQUEST[username]'");
	

if(isset($_POST['regbutton'])) {
	if($_POST['email'] != '' && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['confirm'] != '' ) {
		if($_POST['password'] == $_POST['confirm']) {
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				if(mysql_num_rows($checker) == 0) {
					
					$email = $_POST['email'];
					$username = $_POST['username'];
					$password = $_POST['password'];


					$password = md5($password);


					$query = "INSERT INTO users (email, username, password, date_added) VALUES ('$email', '$username', '$password', NOW())";
					$result = $db->query($query);
					$user_id = $db->insert_id($result);

					setcookie("user_id", $user_id, strtotime( '+90 days' ));

						

					header("Location: /lal/main.php");

				} else {
					$error_msg = "The username or e-mail already exist";
				}

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