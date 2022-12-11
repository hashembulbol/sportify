<?php
$q = $_GET["q"];
$id = $_GET['id']; 
$con = mysqli_connect("localhost","root","","sportify");

$distq = "SELECT slot.id ,slot.stime, slot.etime from slot, activity WHERE slot.etime BETWEEN activity.opentime AND activity.closetime AND activity.id = $id AND slot.stime BETWEEN activity.opentime AND activity.closetime AND slot.id not IN (SELECT slot.id from reserve INNER join slot ON reserve.slotid = slot.id WHERE reserve.date = '$q' AND reserve.actid = $id)";

$rk = mysqli_query($con, $distq);

if($rk){
//	echo "<option> ".$distq." </option>";
while($rowz = mysqli_fetch_array($rk) ){
	
	  echo "<option value='".$rowz['id']."'>";
      echo "From ".$rowz['stime']." To ".$rowz['etime'];
	  echo "</option>";	   

}

}
else { 

die(mysqli_error($con));  
}

mysqli_close($con);
?>