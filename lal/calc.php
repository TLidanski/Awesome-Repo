<?php
	require 'include\query.php';
	require 'calculator.php';
	require 'include\session.inc.php';	

if(!isset($_SESSION['weight'])) {
		header("Location: \lal\lal.php");
}	

$result = mysql_query(" SELECT * FROM meals WHERE calories <= '$MEAL1' ORDER BY RAND() LIMIT 3 ");
$res = mysql_query(" SELECT * FROM meals WHERE calories <= '$MEAL2' ORDER BY RAND() LIMIT 2 ");
$res1 = mysql_query(" SELECT * FROM meals WHERE calories <= '$MEAL3' ORDER BY RAND()  LIMIT 2");
$res2 = mysql_query(" SELECT * FROM meals WHERE calories <= '$MEAL4' ORDER BY RAND()  LIMIT 1");
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
			<th>Total Calorie Needs</th>
			<th>Calories you need to consume per day</th> 
			<th colspan="3">Macros (g)</th>
		  </tr>
		  <tr>
			<td>
			<?php echo $BMR; ?>
			kcal
			</td>
			<td>
			<?php echo $TCN; ?>
			kcal
			</td>
			<td>
			<?php echo $CAL; ?>
			kcal
			</td> 
			<td>
			<?php echo $PROT; ?>
			Proteins
			</td>
			
			<td>
			<?php echo $CARB; ?>
			Carbohydrates
			</td>
			
			<td>
			<?php echo $FAT; ?>
			Fats
			</td>
			
		  </tr>
</table>

<table style="width:100%">
	<caption>Example Meal Plan</caption>
		<tr>
			<th>Meal 1</th>
			<th>Meal 2</th>
			<th>Meal 3</th>
			<th>Meal 4</th>
		</tr>

		<tr>
			<td><?php echo $MEAL1; ?> kcal </td>
			<td><?php echo $MEAL2; ?> kcal </td>
			<td><?php echo $MEAL3; ?> kcal </td>
			<td><?php echo $MEAL4; ?> kcal </td>
		</tr>


		<tr>
			<th>
				<?php while ($row = mysql_fetch_object($result)) { ?>
					<?php 
						echo $row->food . " "; 
						echo $row->calories . " kcal";
					?>
				<?php } ?>	
			</th>

	
			<th>
				<?php while ($row = mysql_fetch_object($res)) { ?>
					<?php
						echo $row->food . " "; 
						echo $row->calories . " kcal";
					?>
				<?php } ?>	
			</th>
			
			<th>
				<?php while ($row = mysql_fetch_object($res1)) { ?>
					<?php 
						echo $row->food . " "; 
						echo $row->calories . " kcal";
					?>
				<?php } ?>	
			</th>

			<th>
				<?php while ($row = mysql_fetch_object($res2)) { ?>
					<?php 
						echo $row->food . " "; 
						echo $row->calories . " kcal";
					?>
				<?php } ?>	
			</th>
		</tr>

		
</table>
	</body>
</html>