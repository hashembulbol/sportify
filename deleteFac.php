<?php 

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "sportify");

$query = "DELETE FROM `newactssubmissions` WHERE `newactssubmissions`.`id` = $id";

$result = mysqli_query($conn, $query);


header("location:facReqs.php?id=".$id);
?>