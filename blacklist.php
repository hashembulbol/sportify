<html>
<head>
<link rel="stylesheet" type="text/css" href="css/managerHomeGYM.css" >
<title> Black List </title>
<style>
#myTable th {
	
	background-color: #4CAF50;
	width: 300px;
}
#myTable td {
	text-align: center;
}

</style>
</head>
<body>
<?php require("managerSidebarPg.php");

$blqu= "select client.fname, client.lname, client.un, reason, date, client.id from client inner join list on list.cid = client.id where list.actid =$id order by date DESC";
if(isset($_POST['list'])){
	
$insertqu = "INSERT INTO `list` (`id`, `actid`, `cid`, `reason`, `date`) VALUES (NULL, '$id', '". $_POST['id']."', '".$_POST['reason']."', '".date("Y-m-d")."')";	
mysqli_query($con, $insertqu);	
}
?>
<!-- Page content -->
<div class="content">

Black listed:
<table border=1>
<tr> 
<th> Name </th>
<th> Userame </th>
<th> Reason </th>
<th> Date </th>
</tr>
<?php
$blres = mysqli_query($con, $blqu);
while ($blrow = mysqli_fetch_array($blres)){
	echo "<tr>";
	echo "<td>". $blrow['fname']." ". $blrow['lname']."</td>";
	echo "<td>". $blrow['un'] ."</td>";
	echo "<td>". $blrow['reason'] ."</td>";
	echo "<td>". $blrow['date'] ."</td>";
	echo "<td> <a href='removefromlist.php?id=$id&cid=".$blrow['id']."'>  Remove from list </a> </td>";
	echo "</tr>";
}
?>
<hr>
</table>
<hr>

<form action="<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>" method="post">

<input type="search" onkeyup="showHint(this.value)" name="un"> Search for the name or username here and take the ID
<br>
<input type="number" name="id" required > ID of client <br>
<input type="textarea" name="reason" required > Reason <br>
<input type="submit" name="list">

</form>

<p id="txtHint"> </p>


</div>
<script>
function showHint(str)
{
	if (str.length==0)	{ 
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	xmlhttp=new XMLHttpRequest();	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","gethintDBlist.php?q="+str,true);
	xmlhttp.send();
//	sortTable();
}
 </script>
</body>
</html>