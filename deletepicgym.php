<?php  
$id = $_GET['id'];
$comint = $_GET['t'];
$pid = $_GET['pid'];
$deletequ = "delete from picture where id = $pid";
$con=mysqli_connect("localhost","root","","sportify");
mysqli_query($con, $deletequ);

header("location:editpicsgym.php?id=$id");


?>