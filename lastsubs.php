<html>
<head>
<?php require("managerSidebarGym.php"); ?>
<link rel="stylesheet" type="text/css" href="css/managerHomeGYM.css" >
<title> Last Subscribtions </title>
<style>
#subsTable th {
	
	background-color: #4CAF50;
	width: 300px;
}
#subsTable td {
	text-align: center;
}
</style>
</head>




<body>

<!-- Page content -->
<div class="content">
<h1>Last Subscribtions: </h1>
<table id= "subsTable">

<tr> 
<th> Name </th>
<th> Phone </th>
<th> Date </th>
</tr>


<?php
$subsquery = "select client.fname, client.lname, client.phone, sub.date from client inner join sub on client.id = sub.cid where sub.actid = $id order by sub.date DESC";
$subsresult = mysqli_query($con, $subsquery);
//echo $subsquery;
while($subsrow = mysqli_fetch_array($subsresult)){
	
	echo "<tr>";
	echo "<td>". $subsrow['fname']." ".$subsrow['lname'] ."</td>";
	echo "<td>". $subsrow['phone']."</td>";
	echo "<td>". $subsrow['date']."</td>";
	echo "</tr>";
	
}
?>
</table>


</div>


</script>

</body>
</html>