<?php
$id = $_GET['id'];
$target_dir = "gallery/"; // create a files directory
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
   	   $con=mysqli_connect("localhost","root","","sportify");
$insertpic = "INSERT INTO `picture` (`id`, `actid`, `date`, `img`, `description`) VALUES (NULL, '$id', '".$_POST['picdate']."', '".basename( $_FILES["fileToUpload"]["name"])."', '".$_POST['picdesc']."');";
mysqli_query($con, $insertpic);

	   header("location:editpicsgym.php?id=$id");
	   

} else {
        echo "Sorry, there was an error uploading your file.";
  }
?>