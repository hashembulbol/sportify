<?php
session_start();
$q=$_GET["q"];//get the q parameter from URL
//echo $q;

$con=mysqli_connect("localhost","root","","sportify");

$distq = "SELECT client.fname ,client.lname, client.un, client.id from client WHERE client.fname LIKE '$q%' OR client.lname LIKE '$q%' OR client.un LIKE '$q%';";
//$q2 = "SELECT activity.name, picture.img, activity.longitude, activity.latitude FROM activity INNER JOIN picture on activity.id = picture.actid WHERE activity.name LIKE '$q%' AND activity.type = 2";
//echo $distq;
$r = mysqli_query($con, $distq);
if($r){
echo "<TABLE id='myTable'>";

echo "<tr>";

echo "<th> Name </th> ";
echo "<th> Userame </th> ";
echo "<th> ID </th> ";

echo "</tr>";
 while($row = mysqli_fetch_array($r) ){
	 
	  echo "<tr>";
      echo "<td>" .$row['fname']." ".$row['lname']."</td>";
      
	  echo "<td>".$row['un']."</td>";
	  echo "<td>".$row['id']."</td>";
	  //echo "<td> <img src='$srcs' width='50' height='50'>"."</td>";
	  echo "</tr>";
}
echo "</TABLE>";
}
else die(mysqli_error($con));
mysqli_close($con);
?>

