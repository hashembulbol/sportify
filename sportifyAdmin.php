<html>
<head>
<link rel="stylesheet" type="text/css" href="css/sportifyAdmin.css" >
  <title> Sportify Admin </title>
<style>
th{
	width: 300px;
	
}
td {
	
	text-align: center;
}
</style>
</head>
<body>
<!-- The sidebar -->
<?php require("sportifyAdminSidebar.php");
?>
<!-- Page content -->
<div class="content">
<table border=2>
<th> First name </th> <th> Last name </th> <th> Phone </th> <th> Birthdate </th> <th> Password </th> <th> Username </th> <th> Email </th> <th> Longitude </th> <th> Latitude </th> <th> Club name </th> <th> Facility/GYM name </th> <th> Date </th> <th> Type </th> <th> City </th>
<?php
$conn = mysqli_connect("localhost", "root", "", "sportify");
$query = "select * from adminsubmissions where checked = 1 ORDER BY date DESC;";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
	for($i = 0 ; $i < 16; $i++)
	{
		if($i == 0 || $i == 12){continue;} 
		echo "<td>" .$row[$i]. "</td>";
	}
	echo "<td>  <a href='acceptSub.php?id=$row[0]'> <button> Accept  </button> </a> </td>";
	echo "<td>  <a href='deleteSub.php?id=$row[0]'> <button> Delete  </button> </a> </td>";
	echo "</tr>";
	
}
 ?>
</table>
</div>

</body>
</html>