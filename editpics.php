<html>
<head>
<link rel="stylesheet" type="text/css" href="css/managerHomeGYM.css" >
<title> Edit Gallery </title>

</style>
</head>




<body>


<?php require("managerSidebarPg.php");

$picsqu = "select picture.id ,date, img, description from activity inner join picture on picture.actid = activity.id where picture.actid =$id;";
$imgs = mysqli_query($con, $picsqu);


 
?>
<!-- Page content -->
<div class="content">



<h1> GALLERY: </h1>
<form method=post action="upload.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
		<p>Choose Image: <input type="file" name="fileToUpload" required >  </p>
		Picture's date <input type="date" name="picdate" > 
		<br>
		<br>
		<br>
		Description <textarea name="picdesc"> </textarea>
		<br>
		<br>
		<br>
		<input type="submit" name="submit" value="Upload Image">
		
		
</form>


<?php
while($imgrow = mysqli_fetch_array($imgs)){
echo "<div class='gallery'>";
echo "<a target='_blank' href='".$imgrow['img']."'>";
echo "<img src='gallery/".$imgrow['img']."' width='600' height='400'> </a> <a href='deletepic.php?t=$type&id=$id&pid=".$imgrow['id']."'> <button> Delete </button> </a>";
echo "<div class='desc'>".$imgrow['description']."</div>";
echo "<hr>";
}

 ?>

  
    

 
</div>






</div>


</script>

</body>
</html>