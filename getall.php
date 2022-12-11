<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 



$id = $_GET['id'];
$con=mysqli_connect("localhost","root","","sportify");
	$sq = "select * from activity where id = $id";
	//echo $sq;
	$r = mysqli_query($con, $sq);
	if(mysqli_num_rows($r)== 1){
		$row = mysqli_fetch_array($r);
		$sc = $row['scid'];
		$admin = $row['adminid'];
		$_SESSION['admin'] = $row['adminid'];
		$adminsess = $_SESSION['admin'];
		$name = $row['name'];
		$area = $row['area'];
		$hr = $row['hrcost'];
		$type = $row['type'];
		$subs = $row['MonthSub'];
		$sport = $row['sport'];
		$notes = $row['notes'];
		$sc = $row['scid'];
		$longitude = $row['longitude'];
		$latitude = $row['latitude'];
		$sc = $row['scid'];
		$phone = $row['phone'];
		$ot = $row['opentime'];
		$ct = $row['closetime'];
		$email = $row['email'];
		$avgquery = "SELECT activity.id, revsub.cid, AVG(review.rate) AS average FROM activity INNER join revsub on activity.id = revsub.actid INNER JOIN review on review.id = revsub.rid where activity.id = $id";
		$avgresult = mysqli_query($con, $avgquery);
		$ro = mysqli_fetch_array($avgresult);
		$namequery = "select activity.name, sc.name from activity inner join sc on activity.scid = sc.id where activity.id = $id"; 
		$namesexec = mysqli_query($con, $namequery);
		$roname = mysqli_fetch_array($namesexec);
		$clubname = $roname[0];
		$activityname = $roname[1];
	}
?>