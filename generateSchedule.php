<?php
$id = $_GET['id'];
require_once 'Classes/PHPExcel.php';
require_once("Classes/PHPExcel/IOFactory.php");
$con=mysqli_connect("localhost","root","","sportify");


$excel = new PHPExcel();
$excel ->setActiveSheetIndex(0);

$openTimesqu = "SELECT slot.stime, slot.etime from slot, activity WHERE slot.etime BETWEEN activity.opentime AND activity.closetime AND activity.id = $id AND slot.stime BETWEEN activity.opentime AND activity.closetime";
$schedr = mysqli_query($con,$openTimesqu);
$from = 4;


$countQu = "SELECT 
    (((closetime % 100 + (closetime / 100) * 60) - (opentime % 100 + (opentime / 100) * 60)) / 60.0) / 100
        AS diff 
    FROM activity where activity.id = $id";
$countr = mysqli_query($con,$countQu);
$asd = mysqli_fetch_array($countr);

while($data = mysqli_fetch_object($schedr)){
	
	$excel ->getActiveSheet()
	->setCellValue('A'.$from , $data->stime)
	->setCellValue('B'.$from , $data->etime);
	$from++;
	
}
$days = array("C","D","E","F","G","H","I");
$counter = 0;
$openHoursCounter = $asd[0] - 1;
$rowStarter = 4;


while($counter < 7 ){

	$rowIncrementer = 0;
	$excel->getActiveSheet()->getColumnDimension($days[$counter])->setWidth(30);
	$dateVar = date("Y-m-d", strtotime("+".$counter." day", strtotime(date("Y-m-d"))));
	//echo " Biggest counter ".$counter;
	//echo $days[$counter]."3";
	$excel ->getActiveSheet()
   	->setCellValue($days[$counter]."3" , $dateVar);
	
	
	while($rowIncrementer <= $openHoursCounter){
		$stimeLeft =  strval($excel ->getActiveSheet() ->getCell('A'.($rowStarter+$rowIncrementer))-> getValue());
		$clqu = "select client.fname, client.lname, client.phone, slot.stime, slot.etime from reserve INNER join client on reserve.cid = client.id INNER join activity on activity.id = reserve.actid inner join slot on slot.id = reserve.slotid WHERE activity.id = $id AND reserve.date = '$dateVar' and slot.stime = '". $stimeLeft."'";
		//echo $clqu;
		$result2 = mysqli_query($con,$clqu);
		$clientReserve = mysqli_fetch_array($result2);
			//echo "reservation found";
		//while($clientReserve = mysqli_fetch_array($result2)){
				//echo strval($excel->getActiveSheet()->getCell('A'.$rowStarter)->getValue());
				//echo $clientReserve['stime'];
				if(strval($clientReserve['stime']) == $stimeLeft){
					
					$excel ->getActiveSheet()
					->setCellValue($days[$counter].($rowStarter+$rowIncrementer),$clientReserve['fname']." ".$clientReserve['lname'].": ". $clientReserve['phone']);
				}
				else{
//					echo "in else";
					$excel ->getActiveSheet()
					->setCellValue($days[$counter].($rowStarter+$rowIncrementer),"-");
				}
	
				
		//}
			
			$rowIncrementer++;
	}
	
	$counter++;
}
//ob_end_clean();
	
//echo date("Y-m-d", strtotime("+".$counter." day", strtotime(date("Y-m-d"))));
//ob_start();
/* header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");;
header("Content-Disposition: attachment;filename=$id.xlsx");
header("Content-Transfer-Encoding: binary "); */


$file = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');

ob_end_clean();
// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="schedule.xlsx"');
$file->save('php://output');
    //$file->save('php://output');
	//$content = ob_get_contents();


//die($content);
//$file ->save( "scheds/".$id.'.htm');
//ob_end_clean();
?>