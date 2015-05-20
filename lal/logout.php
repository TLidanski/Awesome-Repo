<?php
	require 'include\session.inc.php';

	session_destroy();


	header("Location: /lal/main.php");
?>