<?php
	require_once ('MysqliDb.php');
	
	$db = new MysqliDb ('localhost', 'root', '', 'fitness');
	/*
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "fitness";

	mysql_connect($server,$username,$password) or die(mysql_error());
	mysql_select_db($db) or die(mysql_error());
	*/
?>