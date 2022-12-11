<?php 

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "sportify");

$query = "DELETE FROM `trainersubmissions` WHERE `trainersubmissions`.`id` = $id";
$result = mysqli_query($conn, $query);

header("location:trainerReqs.php?id=".$id);
?>