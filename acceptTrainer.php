<?php 

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "sportify");

$query = "UPDATE `trainersubmissions` SET `checked` = '0' WHERE `trainersubmissions`.`id` = $id;";
$result = mysqli_query($conn, $query);

$query1 = "select * from trainersubmissions where id = $id";
$result = mysqli_query($conn, $query1);

$row = mysqli_fetch_array($result);

$query1 = "INSERT INTO `trainer` (`id`, `fname`, `lname`, `phone`, `linkedin`, `ig`, `fb`, `votes`, `birthdate`, `brief`) VALUES (NULL, '".$row['fname']."', '".$row['lname']."', '".$row['phone']."', '".$row['linkedin']."', '".$row['ig']."', '".$row['fb']."', '0', '".$row['birthdate']."', '".$row['specialties']."');";


mysqli_query($conn, $query1);
header("location:trainerReqs.php?id=".$id);
?>