<?php 

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "sportify");

$query = "UPDATE `adminsubmissions` SET `checked` = '0' WHERE `adminsubmissions`.`id` = $id;";
$result = mysqli_query($conn, $query);

$query1 = "select * from adminsubmissions where id = $id";
$result = mysqli_query($conn, $query1);

$row = mysqli_fetch_array($result);

$query1 = "INSERT INTO `admin` (`id`, `fname`, `lname`, `phone`, `birthdate`, `pw`, `un`, `email`) VALUES (NULL, '".$row['fname']."', '".$row['lname']."', '".$row['phone']."', '".$row['birthdate']."', '".$row['pw']."', '".$row['un']."', '".$row['email']."');";
$query2 = "INSERT INTO `sc` (`id`, `name`) VALUES (NULL, '".$row['clubname']."');";
mysqli_query($conn, $query1);
$adminId = mysqli_insert_id($conn);
mysqli_query($conn, $query2);
$clubId = mysqli_insert_id($conn);

$query3 = "INSERT INTO `activity` (`id`, `scid`, `adminid`, `name`, `area`, `type`, `MonthSub`, `hrcost`, `sport`, `notes`, `longitude`, `latitude`, `phone`, `opentime`, `closetime`, `email`, `city`) VALUES (NULL, '".$clubId."', '".$adminId."', '".$row['actname']."', '', '1', '', '', '', '', '".$row['longitude']."', '".$row['latitude']."', '', '', '', '', '".$row['city']."');";
mysqli_query($conn, $query3);
header("location:sportifyAdmin.php?id=".$id);
?>