<?php 

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "sportify");

$query = "UPDATE `newactssubmissions` SET `checked` = '0' WHERE `newactssubmissions`.`id` = $id;";
$result = mysqli_query($conn, $query);

$query1 = "select * from newactssubmissions where id = $id";
$result = mysqli_query($conn, $query1);

$row = mysqli_fetch_array($result);

$query3 = "INSERT INTO `activity` (`id`, `scid`, `adminid`, `name`, `area`, `type`, `MonthSub`, `hrcost`, `sport`, `notes`, `longitude`, `latitude`, `phone`, `opentime`, `closetime`, `email`, `city`) VALUES (NULL, '".$row['scid']."', '".$row['adminid']."', '".$row['actname']."', '', '".$row['type']."', '', '', '', '', '".$row['longitude']."', '".$row['latitude']."', '', '', '', '', '');";
//echo $query3;
mysqli_query($conn, $query3);

header("location:facReqs.php?id=".$id);
?>