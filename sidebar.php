<!DOCTYPE html>
<?php
require("getall.php");
$u = $_SESSION['u'];
$cid = $_SESSION['cid'];


if(isset($_POST['subscribe'])) {
	$beforeCheck = mysqli_query($con, "select cid from list where actid = $id && cid = '".$_SESSION['cid']."'");
	if(mysqli_num_rows($beforeCheck) > 0 ){
		echo "Sorry you are blocked";
	}
	else {
	$sd = $_POST['subdate'];
	$subq = "INSERT INTO `sub` (`id`, `actid`, `cid`, `date`) VALUES (NULL, '$id', '$cid', '".date("Y-m-d")."');";
	$s = mysqli_query($con, $subq);
	echo $subq;
	header("location:activityredi.php?id=$id&t=$type");
	}
	
}
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?php echo $activityname; ?> </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">


<script>
function getDate()
{
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm}
    today = yyyy+""+mm+""+dd;

    document.getElementById("todayDate").value = today;
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
              <a class="dropdown-item" href="faq.php?id=<?php echo $id; ?>">FAQ</a>
              <a class="dropdown-item" href="404.php?id=<?php echo $id; ?>">404</a>
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

    
    <h1 class="mt-4 mb-3"> <?php echo $clubname; ?>
      <small><?php echo $activityname; ?></small>
    </h1>


    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="home.php?u=<?php echo $_SESSION['u']; ?>" class="list-group-item">Sportify</a>
          <a href="sidebar.html" class="list-group-item active">Home page</a>
          <a href="contact.php?id=<?php echo $id;?>" class="list-group-item">Contact us</a>
		  <a href="portfolio-1-col.php?id=<?php echo $_GET['id'] ?>" class="list-group-item">Our Gallery</a>
          <a href="reviews.php?id=<?php echo $id;?>" class="list-group-item">Review and rate</a>
          <a href="faq.php?id=<?php echo $id; ?>" class="list-group-item">FAQ</a>
          <a href="404.php?id=<?php echo $id; ?>" class="list-group-item">404</a>
          
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <h2>average rating</h2>
        <p> <?php echo $ro['average']; ?> </p>
		
		
		
		<h2>Area</h2>
        <p> <?php echo $area; ?> M<sup> 2 </sup> </p>
		
			
		<h2> <a href="contact.php?id=<?php echo $id;?>"> See the location on map </a></h2>
		
		
		<h2>Notes</h2>
        <p> <?php echo $notes; ?> </p>
		
		
		<h2> Month sub </h2>
		<p> <?php echo $subs; ?> $ </p>
      
	  <form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=$id";?>">
	  <input type="hidden" id="todayDate" name="subdate" >
	  
	  <?php 
		  
		  $checkQu = "select sub.cid from sub where sub.actid = $id";
		  $s = mysqli_query($con, $checkQu);
		  $arr = array();
		  while ($r = mysqli_fetch_array($s)){
			  
			  array_push($arr ,$r[0]);
		  }
		  $x = false;
		  for ($i = 0 ; $i< sizeof($arr) ; $i++){
			  if($cid == $arr[$i]){
			  $x = true;
			  break; 
			  }  
		  }	
			if($x) 	echo "<button name='subscribe' type='submit' disabled='' > Already Subscribed </button>";		  
			else if($x == false)  echo "<button name='subscribe' type='submit'> Subscribe </button>";
		 
				
			  
		  
		  
	  ?>
	  </form>
	  </div>
    </div>
  </div>
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
