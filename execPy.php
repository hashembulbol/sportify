<?php
$timeNow = date("H:i:s");
$dateToday = date("Y-m-d");
$hour = (int)$timeNow[0].$timeNow[1];
$month = (int)$dateToday[5].$dateToday[6];
$months = array_fill(0, 12, 0);
$hours = array_fill(0,24,0);
$dayOfWeek = date("N");
//echo $dayOfWeek;
$dayOfWeek = ((int) $dayOfWeek)-1;

//echo "<br>";
$days = array_fill(0,7,0);



$is_weekend = 0;
if($dayOfWeek == 5 || $dayOfWeek == 6){$is_weekend = 1;}



$is_holiday = 0;
$holidays = array();
array_push($holidays, "01-01"); array_push($holidays, "01-06"); array_push($holidays, "02-09"); array_push($holidays, "02-14"); array_push($holidays, "03-25");
array_push($holidays, "04-19"); array_push($holidays, "04-21"); array_push($holidays, "04-22"); array_push($holidays, "04-26"); array_push($holidays, "04-28");
array_push($holidays, "04-29"); array_push($holidays, "05-01"); array_push($holidays, "05-25"); array_push($holidays, "08-12"); array_push($holidays, "08-15");
array_push($holidays, "09-01"); array_push($holidays, "09-10"); array_push($holidays, "11-10"); array_push($holidays, "11-22"); array_push($holidays, "12-25");
for($i =0; $i < sizeof($holidays) ; $i++){
if(substr($dateToday,4) == $holidays[$i]) $is_holiday = 1;
break;	
}

switch($dayOfWeek){

	case 0;
	$days[0] = 1;
	break;
	
	case 1;
	$days[1] = 1;
	break;
	
	case 2;
	$days[2] = 1;
	break;
	
	case 3;
	$days[3] = 1;
	break;
	
	case 4;
	$days[4] = 1;
	break;
	
	case 5;
	$days[5] = 1;
	break;
	
	case 6;
	$days[6] = 1;
	break;
	
}

switch($hour){
	case 0;
	$hours[0] = 1;
	break;
	
	case 1;
	$hours[1] = 1;
	break;
	
	case 2;
	$hours[2] = 1;
	break;

	case 3;
	$hours[3] = 1;
	break;

	case 4;
	$hours[4] = 1;
	break;

	case 5;
	$hours[5] = 1;
	break;

	case 6;
	$hours[6] = 1;
	break;

	case 7;
	$hours[7] = 1;
	break;

	case 8;
	$hours[8] = 1;
	break;
	
	case 9;
	$hours[9] = 1;
	break;

	case 10;
	$hours[10] = 1;
	break;

	case 11;
	$hours[11] = 1;
	break;

	case 12;
	$hours[12] = 1;
	break;

	case 13;
	$hours[13] = 1;
	break;

	case 14;
	$hours[14] = 1;
	break;

	case 15;
	$hours[15] = 1;
	break;
	
	case 16;
	$hours[16] = 1;
	break;

	case 17;
	$hours[17] = 1;
	break;

	case 18;
	$hours[18] = 1;
	break;

	case 19;
	$hours[19] = 1;
	break;

	case 20;
	$hours[20] = 1;
	break;

	case 21;
	$hours[21] = 1;
	break;

	case 22;
	$hours[22] = 1;
	break;

}

switch($month){
	case 1:	
	$months[0] =1;	
	break;
	
	case 2:	
	$months[1] =1;	
	break;
	
	case 3:	
	$months[2] =1;	
	break;
	
	case 4:	
	$months[3] =1;	
	break;
	
	case 5:	
	$months[4] =1;	
	break;
	
	case 6:	
	$months[5] =1;	
	break;
	
	case 7:	
	$months[6] =1;	
	break;
	
	case 8:	
	$months[7] =1;	
	break;
	
	case 9:	
	$months[8] =1;	
	break;
	
	case 10:	
	$months[9] =1;	
	break;
	
	case 11:	
	$months[10] =1;	
	break;
	
	case 12:	
	$months[11] =1;	
	break;
	
	
}

$daysStr = "";
for( $j=0; $j < sizeof($days) ;$j++){  
$daysStr .= $days[$j]." "; 
}
$monthStr ="";
for( $j=0; $j < sizeof($months) ;$j++){  
$monthStr .= $months[$j]." "; 
}
$hourStr = "";
for( $j=0; $j < sizeof($hours) ;$j++){  
$hourStr .= $hours[$j]." "; 
}

//echo $daysStr;
$exampleInput = array('43190', '1', '0', '66.35', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
$exampleInputString = "";
for( $j=0; $j < sizeof($exampleInput) ;$j++){  
$exampleInputString .= $exampleInput[$j]." "; 
}
//echo $exampleInputString;

$secondsToday = (time() % 86400);
$timestamp = 43200 - $secondsToday;

$temparature = $_GET['t'];
$inputArr = $timestamp. " ". $is_weekend. " ". $is_holiday. " ". $temparature. " ". $daysStr. $monthStr. $hourStr;
	$my_command = escapeshellcmd('python mymod.py '.$inputArr);
    $command_output = shell_exec($my_command);
    $c = $command_output;
header("location:managerHomeGYM.php?id=".$_GET['id']."&c=$c");

?>