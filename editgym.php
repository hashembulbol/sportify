<html>
<head>
<title> Edit GYM Details </title>

<?php 
require_once("managerSidebarGym.php");
if(isset($_GET['lon']) && isset($_GET['lat'])){
$cnqu = "UPDATE `activity` SET `longitude` = '".$_GET['lon']."' ,`latitude` = '".$_GET['lat']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
	
	
}
if (isset($_POST['changename']))
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `name` = '".$_POST['name']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}

if (isset($_POST['changesubs'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `MonthSub` = '".$_POST['subs']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}

if (isset($_POST['changearea'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `area` = '".$_POST['area']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}

if (isset($_POST['changephone'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `phone` = '".$_POST['phone']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}

if (isset($_POST['changeot'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `opentime` = '".$_POST['ot']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}


if (isset($_POST['changect'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `closetime` = '".$_POST['ct']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}


if (isset($_POST['changeemail'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `email` = '".$_POST['email']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}

if (isset($_POST['changenotes'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `notes` = '".$_POST['notes']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}
if (isset($_POST['updateLoc'])) 
{
//$id= $_GET['id'];
$cnqu = "UPDATE `activity` SET `longitude` = '".$_POST['newlong']."' ,`latitude` = '".$_POST['newlat']."' WHERE `activity`.`id` = $id;";
	echo $cnqu;
	mysqli_query($con, $cnqu);
	header("location:editgym.php?id=$id");
}


?>
<link rel="stylesheet" type="text/css" href="css/managerHomeGYM.css" >
</head>




<body>

<!-- Page content -->
<div class="content">
<h1> Edit Page: </h1>

<br>
<br>

<form action="<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>" method="post">

<?php

 echo "<input type=text name='name' value='$name' size='40'>";

?>


 
<button type=submit name="changename"> Change name </button>
<hr>
<h3> Contact Info: </h3>



<?php

 echo "<input type=phone name='phone' value='$phone'>";

?>
<button type=submit name="changephone"> Change Phone number </button>
<br>
<?php

 echo "<input type=email name='email' value='$email'>";

?>
<button type=submit name="changeemail"> Change email </button>
<hr>


<h3> Facility Details: </h3>



<?php

 echo "<input type=number name='subs' value='$subs'>";

?>
<button type=submit name="changesubs"> Change subscribtion </button>
<br>
<?php

 echo "<input type=number name='area' value='$area'>";

?>
<button type=submit name="changearea"> Change Area </button>
<br>

<?php

 echo "<input type=time name='ot' value='$ot'>";

?>
<button type=submit name="changeot"> Change open time </button>
<br>
<?php

 echo "<input type=time name='ct' value='$ct'>";

?>
<button type=submit name="changect"> Change close time </button>
<br>

<?php

 echo "<textarea name='notes' rows=9 cols=30> $notes </textarea> ";

?>
<br>
<button type=submit name="changenotes"> Change notes/offers/promotions </button>
<br>
<hr>
<h3> Location </h3>
<button type="submit" name="updateLoc"> Take my location now as GYM location </button>
<input type=hidden id="lon" name="newlong"> <input type=hidden id="lat" name="newlat">
or

<a href="newmap.php?id=<?php echo $id; ?>"> Locate on map </a>

</form>
</div>

<script>
var lon = document.getElementById("lon");
var lat = document.getElementById("lat");
getLocation();
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  lon.value = position.coords.longitude;
  lat.value = position.coords.latitude;
}
</script>

</body>
</html>