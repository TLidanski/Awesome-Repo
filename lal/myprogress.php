<?php 
	require 'include\session.inc.php';
	require 'include\db.php';

$result = mysql_query("SELECT weight, date_added FROM progress WHERE user = '$_COOKIE[user_id]'");

?>

<html>
<head>
	<title>My Progress</title>
</head>
<body>
	<table border="1">
		<caption>Your progress so far..</caption>
		<tr>
			<th>Date</th>
			<th>Weight</th>
		</tr>

			
		<?php while ($row = mysql_fetch_object($result)) { ?>
			<tr>
				<td><?php echo $row->date_added; ?></td>
				<td><?php echo $row->weight; ?></td>
			</tr>	
		<?php } ?>
		
	</table>
</body>
</html>