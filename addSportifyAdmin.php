<html>
<head>
<link rel="stylesheet" type="text/css" href="css/sportifyAdmin.css" >
<title> Add Sportify Admin </title>
</head>




<body>
<!-- The sidebar -->
<?php require("sportifyAdminSidebar.php");
$id = $_GET['id'];
if(isset($_POST['add'])){
$conn = mysqli_connect("localhost", "root", "", "sportify");
$query = "INSERT INTO `sportifyadmin` (`id`, `fname`, `lname`, `pw`) VALUES (NULL, '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['pw']."');";
//echo $query;
$result = mysqli_query($conn, $query);
}
?>


<!-- Page content -->
<div class="content">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>">

First name: <input type="text" name="fname" required>

Last name: <input type="text" name="lname" required> 

Password: <input type="password" name="pw" required>

<input type="submit" name="add">
</form>

</div>

</body>
</html>