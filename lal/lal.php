<?php
/*
		if($_POST['weight'] != '' && $_POST['desiredweight'] != '') {
			
		} else {
			$error_msg = "You left one of the fields blank";
		}
*/


?>
<html>
<head>
  <title>Calorie Calculator</title>
  <link href="1140.css" rel="stylesheet" type="text/css">		
</head>

<body>
	<div class="container">
		  <div style="background-color:C0C0C0 ; color:black; padding:20px;">
			<h1 style="font-family:verdana">Calculate your calories and macros</h1>  
				<p>Enter your current weight and your desired one and our app will calculate just how many macros and calories you need to achieve your goals</p>

		  </div>
		  <form action ="" method ="POST">
		  <div class="column">
			<div class="row">
				<input type="text" class="large-fld" name="weight" value="" placeholder="Enter your weight" >
			</div>
			<div class="row">
				<input type="text" class="large-fld" name="desiredweight" value="" placeholder="Enter your desired weight" >
			</div>
			<div class="row">
				<input type ="submit" class="large-btn" name="calculate" value="Calculate Calories">
			</div>
		  </div>		  
		  
	</div>
  
</body>

</html>
