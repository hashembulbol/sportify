<html>
<head>
<link rel="stylesheet" type="text/css" href="css/sportifyAdmin.css" >
  <title> Trainer Requests </title>
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
<table border="2">
<th> First Name </th> <th> Last Name </th> <th> Phone </th> <th> Facebook </th> <th> Linkedin </th> <th> Instagram </th> <th> Submission Date </th> <th> Brief </th> <th> Birth Date </th>
<?php
$conn = mysqli_connect("localhost", "root", "", "sportify");
$query = "select * from trainersubmissions where checked = 1 ORDER BY dateSubmission DESC;";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
	
	echo "<tr>";
	
	for($i = 0 ; $i < 10; $i++)
	{
		if($i == 0) continue;
		else if($i == 4 || $i == 5 || $i == 6 ) echo "<td> <a href='".$row[$i]."'> " .$row[$i]. " </a> </td>";
		else echo "<td>" .$row[$i]. "</td>";
	}
	echo "<td>  <a href='acceptTrainer.php?id=$row[0]'> <button> Accept  </button> </a> </td>";
	echo "<td>  <a href='deleteTrainerReq.php?id=$row[0]'> <button> Delete </button> </a> </td>";
	echo "</tr>";
	
}
 ?>
</table>
</div>

</body>
</html>