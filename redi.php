<?php
session_start();
$un = $_SESSION["u"];
$lon = $_GET["lon"];
$lat = $_GET["lat"];
$conn = mysqli_connect("localhost", "root", "", "sportify");
$sqlcoords = "UPDATE client SET longitude = $lon, latitude = $lat where un = '$un';";
$result = mysqli_query($conn, $sqlcoords);
header("location:home.php?u=". $un);
?>