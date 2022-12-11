<?php 

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "sportify");

$query = "DELETE FROM `adminsubmissions` WHERE `adminsubmissions`.`id` = $id";

$result = mysqli_query($conn, $query);


header("location:sportifyAdmin.php?id=".$id);
?>