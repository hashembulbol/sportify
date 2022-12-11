<?php
session_start();
$q=$_GET["q"];//get the q parameter from URL
$userLong = $_SESSION['ulg'];
$userLat = $_SESSION['ult'];
$con=mysqli_connect("localhost","root","","sportify");
$distq = "SELECT activity.id ,activity.name, ( 6371 * acos ( cos ( radians($userLat) ) * cos( radians(activity.latitude) ) * cos( radians(activity.longitude) - radians($userLong) ) + sin ( radians($userLat) ) * sin( radians(activity.latitude) ) ) ) AS distance, AVG(review.rate) AS ave FROM activity INNER join revsub on activity.id = revsub.actid INNER join review on review.id = revsub.rid WHERE activity.name LIKE '$q%' and activity.type = 1 GROUP BY activity.id order by distance";
//echo $distq;
$r = mysqli_query($con, $distq);
if($r){
	echo "<table id='myTable'>";
	echo "<th> Name </th> <th> Distance (KM) </th> <th> Average Rating </th>";
 while($row = mysqli_fetch_array($r) ){
	 $activityid = $row['id'];
	  echo "<tr>";
      echo "<td> <a href='activityredi.php?id=$activityid&t=1'> ".$row['name']." </a> </td>";
	  echo "<td>". strval((int)$row['distance'])."</td>";
	  echo "<td>".strval((int)$row['ave'])."</td>";
	  echo "</tr>";
}
echo "</table>";
}
else  die(mysqli_error($con));
mysqli_close($con);
?>

