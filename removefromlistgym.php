<?php
$idToRemove = $_GET['cid'];
$id = $_GET['id'];

$removeQuery = "delete from list where actid = $id AND cid = $idToRemove";
$con=mysqli_connect("localhost","root","","sportify");
$r = mysqli_query($con, $removeQuery);
header("location:blacklistgym.php?id=$id");

?>