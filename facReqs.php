<html>
<head>
<link rel="stylesheet" type="text/css" href="css/sportifyAdmin.css" >
<title> New Facility Requests </title>
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
<table border=1>
<th> Name </th> <th> Submission Date </th> <th> Type </th> <th> Longitude </th> <th> Latitude </th> <th> Admin ID </th> <th> Club ID </th>
<?php
$conn = mysqli_connect("localhost", "root", "", "sportify");
$query = "SELECT * FROM `newactssubmissions` where checked = 1";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
	
	echo "<tr>";
	
	for($i = 0 ; $i < 8; $i++)
	{
		if($i == 0 || $i == 6)continue;
		echo "<td>" .$row[$i]. "</td>";
	}
	echo "<td>  <a href='acceptFac.php?id=$row[0]'> <button> Accept  </button> </a> </td>";
	echo "<td>  <a href='deleteFac.php?id=$row[0]'> <button> Delete  </button> </a> </td>";
	echo "</tr>";
	
}
 ?>
</table>
</div>

</body>
</html>