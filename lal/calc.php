<?php

	require 'calculator.php';
	require 'session.inc.php';
	
	require_once ('include\MysqliDb.php');
	$db = new MysqliDb ('localhost', 'root', '', 'fitness');
	

if(!isset($_SESSION['weight'])) {
		header("Location: \lal\lal.php");
}	

?>

<html>
	<head>
		<title>Calorie Calculator</title>
		<link href="calc.css" rel="stylesheet" type="text/css">	
	</head>
	
	<body>
<table style="width:100%">
	<caption>Caloric Info</caption>
		  <tr>
			<th>Basal Metabolic Rate</th>
			<th>Calories you need to consume per day</th> 
			<th colspan="3">Macros (g)</th>
		  </tr>
		  <tr>
			<td>
			<?php if(!empty($BMR)) {echo $BMR;} ?>
			kcal
			</td>
			<td>
			<?php if(!empty($CAL)) {echo $CAL;} ?>
			kcal
			</td> 
			<td>
			<?php if(!empty($PROT)) {echo $PROT;} ?>
			Proteins
			</td>
			
			<td>
			<?php if(!empty($CARB)) {echo $CARB;} ?>
			Carbohydrates
			</td>
			
			<td>
			<?php if(!empty($FAT)) {echo $FAT;} ?>
			Fats
			</td>
			
		  </tr>
</table>
	</body>
</html>