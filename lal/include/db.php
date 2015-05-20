<?php
	define ('MYSQL_HOSTNAME', 'localhost');
	define ('MYSQL_USERNAME', 'root');
	define ('MYSQL_PASSWORD', '');
	define ('MYSQL_DATABASE', 'fitness');

	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("fitness");

	require_once('\include\mysql_db.class.php');

	$db = new mysql_db();
	$db->connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD) or die(mysql_error());
	$db->select_db(MYSQL_DATABASE) or die(mysql_error());
	$db->set_magic_quotes_off();
?>