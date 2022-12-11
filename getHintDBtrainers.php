<?php
session_start();
$q=$_GET["q"];//get the q parameter from URL

$con=mysqli_connect("localhost","root","","sportify");
$defaultq = "select fname, lname, votes from trainer order by votes";
$distq = "SELECT id,fname, lname, votes from trainer where trainer.fname LIKE '$q%' OR trainer.lname LIKE '$q%' order by votes";
//$q2 = "SELECT activity.name, picture.img, activity.longitude, activity.latitude FROM activity INNER JOIN picture on activity.id = picture.actid WHERE activity.name LIKE '$q%' AND activity.type = 2";
//echo $distq;
$r = mysqli_query($con, $distq);
if($r){
echo "<TABLE id='myTable'>";
echo "<th> Name </th> <th> Votes </th>";
 while($row = mysqli_fetch_array($r)){
	  echo "<tr>";
      echo "<td> <a href='trainerprofile.php?id=".$row['id']."'> ".$row['fname']. " " .$row['lname']. " </a> </td>";
	  echo "<td>".$row['votes']."</td>";
	  echo "</tr>";
}
echo "</TABLE>";}
else  die(mysqli_error($con));
mysqli_close($con);
?>

