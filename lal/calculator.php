<?php
require 'lal.php';
if(isset($_SESSION['weight']) && isset($_SESSION['dweight'])) {
	$BMR = 0;
	$CAL = 0;

	$sex = $_SESSION['sex'];
	switch ($sex) {
	case 'M' : $BMR=66+(13.7*$_SESSION['weight'])+(5*$_SESSION['height'])-(6.8*$_SESSION['age']); break;
	case 'F' : $BMR=665+(9.6*$_SESSION['weight'])+(1.8*$_SESSION['height'])-(4.7*$_SESSION['age']); break;
	} 
	
	if($_SESSION['weight'] < $_SESSION['dweight']) {
		$CAL=$BMR + 200;
		$PROT=$_SESSION['weight'] * 2.5;
		$CARB=$_SESSION['weight'] * 7.5;
		$FAT=$_SESSION['weight'];
	} else {
		$CAL=$BMR - 150;
		$PROT=$_SESSION['weight'] * 3;
		$CARB=$_SESSION['weight'] * 3.5;
		$FAT=$_SESSION['weight'] * 0.5;
	}
	if($_SESSION['weight'] == $_SESSION['dweight']) {
		$CAL=$BMR;
		$PROT=$_SESSION['weight'] * 2;
		$CARB=$_SESSION['weight'] * 5.5;
		$FAT=$_SESSION['weight'];
	}
}
?>