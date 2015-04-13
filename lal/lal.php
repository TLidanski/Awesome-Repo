<?php

require 'session.inc.php';

require_once ('include\MysqliDb.php');
$db = new MysqliDb ('localhost', 'root', '', 'fitness');
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
			$_SESSION['calculate'] = $_POST['calculate'];
			
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
			<a href="lal.php">My Progress</a> 
			<a href="main.php">Logout</a>
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
				<input type ="submit" class="field button" name="calculate" value="Calculate Calories">
			</div>
		  </div>		  
		  
	</div>
  
</body>

</html>