<?php

require 'include\session.inc.php';
require 'include\db.php';

require_once ('\include\mysql_db.class.php');


if (!isset($_SESSION['username'])) {
	header('Location: \lal\main.php');
}


	if(isset($_POST['calculate'])) { 
		if($_POST['weight'] != '' && $_POST['dweight'] != '' && $_POST['height'] != '' && $_POST['sex'] != '' && $_POST['age'] != '') {

			$_SESSION['weight'] = $_POST['weight'];
			$_SESSION['dweight'] = $_POST['dweight'];
			$_SESSION['height'] = $_POST['height'];
			$_SESSION['age'] = $_POST['age'];
			$_SESSION['sex'] = $_POST['sex'];
			$_SESSION['activity'] = $_POST['activity'];

			
			$date = date('Y-m-d');

			$checker = mysql_query("SELECT id FROM progress WHERE date_added = '$date' AND user = '$_COOKIE[user_id]'");
			$row = mysql_num_rows($checker);

				if ($row == 0) {
						
						$query = "INSERT INTO progress (user, weight, date_added) VALUES ('$_COOKIE[user_id]', '$_POST[weight]', NOW())";
						$result = $db->query($query);
				}		

			header("Location: /lal/calc.php");
			
		} else {
			$error_msg =  'You left one of the fields blank';
		}
	}


?>

<html>
<head>
  <title>Calorie Calculator</title>
  <link href="lol.css" rel="stylesheet" type="text/css">	
  <link href="1140.css" rel="stylesheet" type="text/css">  
</head>

<body>
	<div class="container">	
		  <div style="background-color:C0C0C0 ; color:black; padding:20px;">
			<a href="myprogress.php">My Progress</a> 
			<a href="logout.php">Logout</a>
			<h1>Calculate your calories and macros</h1>  
				<p>Enter your current weight and your desired one and our app will calculate just how many macros and calories you need to achieve your goals</p>

		  </div>
		  <form action ="" method ="POST">
		  
		  
		  <?php if(isset($error_msg)) { ?>
		  <div class="alert">
			<?php echo $error_msg; ?>
		  </div>
		  <?php }?>
		  
		  <div class="column">
		  
			<div class="row">
				<input type="radio" name="sex" value="M">Male
			</div>
			
			<div class="row">
				<input type="radio" name="sex" value="F">Female
			</div>
			
			<div class="row">
				<input type="text" class="field" name="height" value="" placeholder="Enter your height" >
			</div>
			
			<div class="row">
				<input type="text" class="field" name="age" value="" placeholder="Enter your age" >
			</div>
		  
			<div class="row">
				<input type="text" class="field" name="weight" value="" placeholder="Enter your weight" >
			</div>
			<div class="row">
				<input type="text" class="field" name="dweight" value="" placeholder="Enter your desired weight" >
			</div>
			<div class="row">
				<select name="activity">
						<option value="1">Little or no exercise</option>
						<option value="2">Light exercise 1-3 days/week</option>
						<option value="3">Moderate exercise 3-5 days/week</option>
						<option value="4">Hard exercise 6-7 days a week</option>
						<option value="5">Very hard exercise</option>
				</select>
			</div>
			<div class="row">
				<input type ="submit" class="field button" name="calculate" value="Calculate Calories">
			</div>
		  </div>		  
		  
	</div>
  
</body>

</html>