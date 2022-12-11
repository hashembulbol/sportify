<html>
<head>
<link rel="stylesheet" type="text/css" href="css/managerHomeGYM.css" >
<title> Add Other Facility </title>
</head>




<body>


<?php require("managerSidebarGym.php");
 ?>
<!-- Page content -->
<div class="content">


<?PHP
$con=mysqli_connect("localhost","root","","sportify");
$listactsql = "select activity.id, activity.name, activity.type from activity where adminid = $admin AND activity.id != $id";
$actr = mysqli_query($con, $listactsql);

if(mysqli_num_rows($actr) ==0 ){  echo "You have no other facilities/GYMs under your control"; }
else {
		echo "<h2> Under You Control: </h2> ";
while($actrow = mysqli_fetch_array($actr)){
	
	$actid = $actrow['id'];
	$type = $actrow['type'];
	echo "<a href='managerRedi.php?id=$actid&t=$type'>".$actrow['name']."</a>";
	echo "<br>";
}
}


?>
<hr>
<br>
<a href="newfacilitySign.php?adminid=<?php echo $admin."&scid=$sc"; ?>"> Add new GYM/facility </a>

</div>


</script>

</body>
</html>