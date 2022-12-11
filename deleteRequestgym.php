<html>
<head>
<link rel="stylesheet" type="text/css" href="css/managerHomeGYM.css" >
<title> Deletion Request </title>

</head>
<?php require("managerSidebarGym.php"); ?>

<body>
<!-- Page content -->
<div class="content">

<h1>Delete This Page: </h1>
<?php
if(isset($_POST['delete'])){
	
	$checkPw = "select pw from admin where id= $admin;";
	$checkr = mysqli_query($con, $checkPw);
	while($checkpr = mysqli_fetch_array($checkr)){
		
	if($checkpr['pw'] == $_POST['pw']){	
	$deleteQu = "INSERT INTO `deleterequests` (`id`, `adminid`, `date`, `reason`, `actid`) VALUES (NULL, '$admin', '".date("Y-m-d")."', '". $_POST['reason'] ."', '$id');";	
	mysqli_query($con, $deleteQu);
	
	}
	else{
		echo "Wrong password";
		
	}
	
	

}
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>">
Reason:
<textarea name="reason"> </textarea>
<br>
Password:
<input type="password" name="pw">
<br>
<button type="submit" name="delete"> Wipe all data </button>
</form>
</div>
</script>
</body>
</html>