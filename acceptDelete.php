<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "sportify");

$query = "UPDATE `deleterequests` SET `checked` = '0' WHERE `deleterequests`.`id` = $id;";

$result = mysqli_query($conn, $query);

$query = "DELETE FROM `activity` WHERE `activity`.`id` = $id";

$result = mysqli_query($conn, $query);

header("location:deletionRequests.php?id=".$id);

?>