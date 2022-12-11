<!DOCTYPE html>
<?php
session_start();

$un = $_SESSION['u'];
$id = $_GET['id'];
	$con=mysqli_connect("localhost","root","","sportify");

if(isset($_POST['ressub'])){
    $beforeCheck = mysqli_query($con, "select cid from list where actid = $id && cid = '".$_SESSION['cid']."'");
	if(mysqli_num_rows($beforeCheck) > 0 ){
		echo "Sorry you are blocked";
	}
	else {
	$reserveQu = "INSERT INTO `reserve` (`id`, `slotid`, `actid`, `cid`, `date`, `actionDate`) VALUES (NULL, '".$_POST['restime']."', '$id', '".$_SESSION['cid']."', '".$_POST['resdate']."', '".date("Y-m-d")."');";
	$r = mysqli_query($con, $reserveQu);
	header("location:home.php?u=$un");
	}
}
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Select Time</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
<script>
function updateTimes(str)
{
	
	if (str.length==0){ 
	
	document.getElementById("avtimes").innerHTML = "";
		return;
	}
	xmlhttp=new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
			
			document.getElementById("avtimes").innerHTML = xmlhttp.responseText;
			//alert("changed");
		}
	}
	xmlhttp.open("GET","updateTimes.php?id=<?php echo $id; ?>&q="+str,true);
	xmlhttp.send();
	
}


 </script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Sportify</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
    
		<li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
	
	
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
		  
     
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="contactSportify.html">Contact</a>    
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
            </div>
          </li>
        
		
		<li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
		
		</ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Thanks
      <small>Select from the available times!</small>
    </h1>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>">
    Date of reservation: <input value="<?php echo date("Y-m-d"); ?>" type="date" name="resdate" onchange="updateTimes(this.value)" min="<?php echo date("Y-m-d"); ?>" >
	Available times: <select name="restime" id="avtimes">
	
<?php

$distq = "SELECT slot.id ,slot.stime, slot.etime from slot, activity WHERE slot.etime BETWEEN activity.opentime AND activity.closetime AND activity.id = $id AND slot.stime BETWEEN activity.opentime AND activity.closetime AND slot.id not IN (SELECT slot.id from reserve INNER join slot ON reserve.slotid = slot.id WHERE reserve.date = '".date("Y-m-d")."' AND reserve.actid = $id)";

$rk = mysqli_query($con, $distq);

if($rk){
//	echo "<option> ".$distq." </option>";
while($rowz = mysqli_fetch_array($rk) ){
	
	  echo "<option value='".$rowz['id']."'>";
      echo "From ".$rowz['stime']." To ".$rowz['etime'];
	  echo "</option>";	   

}

}


?>
	
					 </select>
	
	<button type="submit" name="ressub"> Reserve Now </button>
	</form>    
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Sportify 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
