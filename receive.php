<?PHP
session_start();
$managerun = $_SESSION['managerun'];
$con=mysqli_connect("localhost","root","","sportify");
$sql1 = "select id from admin where un = '$managerun'";
$r1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($r1);
$adminid = $row1[0];
$sql = "select activity.id, activity.name, activity.type from activity where adminid = $adminid";
$r = mysqli_query($con, $sql);

if(mysqli_num_rows($r) == 1 ){ $row = mysqli_fetch_array($r); $actid = $row['id'];
	$type = $row['type'];
	 header("location:managerRedi.php?id=$actid&t=$type"); }
else if(mysqli_num_rows($r) > 1){
while($row = mysqli_fetch_array($r)){
	$actid = $row['id'];
	$type = $row['type'];
	echo "<a href='managerRedi.php?id=$actid&t=$type'>".$row['name']."</a>";
	echo "<br>";
}

}
else echo "You have no club assigned"; 
?>