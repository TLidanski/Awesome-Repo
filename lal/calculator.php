<?php
require 'lal.php';
if(isset($_SESSION['weight']) && isset($_SESSION['dweight'])) {
	$BMR = 0;  //Basal Metabolic Rate
	$TCN = 0;  //Total Calorie Needs
	$CAL = 0;  //Calories you should consume to manipulate your body weight

	$sex = $_SESSION['sex'];
	switch ($sex) {
	case 'M' : $BMR=66+(13.7*$_SESSION['weight'])+(5*$_SESSION['height'])-(6.8*$_SESSION['age']); break;
	case 'F' : $BMR=665+(9.6*$_SESSION['weight'])+(1.8*$_SESSION['height'])-(4.7*$_SESSION['age']); break;
	} 

	$activity = $_SESSION['activity'];
	switch ($activity) {
		case '1' : $TCN = $BMR*1.2; break;
		case '2' : $TCN = $BMR*1.375; break;
		case '3' : $TCN = $BMR*1.55; break;
		case '4' : $TCN = $BMR*1.725; break;
		case '5' : $TCN = $BMR*1.9; break;
	}
	
	if($_SESSION['weight'] < $_SESSION['dweight']) {
		$CAL=$TCN + 200;
		$PROT=$_SESSION['weight'] * 2.5;
		$CARB=$_SESSION['weight'] * 6.5;
		$FAT=$_SESSION['weight'];
	} else {
		$CAL=$TCN - 150;
		$PROT=$_SESSION['weight'] * 3;
		$CARB=$_SESSION['weight'] * 3.5;
		$FAT=$_SESSION['weight'] * 0.5;
	}
	if($_SESSION['weight'] == $_SESSION['dweight']) {
		$CAL=$TCN;
		$PROT=$_SESSION['weight'] * 2;
		$CARB=$_SESSION['weight'] * 5.5;
		$FAT=$_SESSION['weight'];
	}

	$MEAL1 = (35*$CAL)/100;
	$MEAL2 = (25*$CAL)/100;
	$MEAL3 = (20*$CAL)/100;
	$MEAL4 = (20*$CAL)/100;
}
?>