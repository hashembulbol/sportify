<!DOCTYPE html>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


	require("getall.php");	
	//echo $_SESSION['cid'];
	if(isset($_POST['selec'])){
		header("location:timeselection.php?id=". $_GET['id']);
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
              <a class="dropdown-item" href="404.php?id=<?php echo  $id; ?>">404</a>
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
    <h1 class="mt-4 mb-3"> <?php echo $clubname ?>
      <small> <?php echo $activityname ?> </small>
    </h1>


    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="home.php" class="list-group-item">Sportify</a>
          <a href="sidebar.html" class="list-group-item active">Home page</a>          
          <a href="contact.php?id=<?php echo $_GET['id'] ?>" class="list-group-item">Contact us</a>
		  <a href="portfolio-1-col.php?id=<?php echo $_GET['id'] ?>" class="list-group-item">Our Gallery</a>
          <a href="reviews.php?id=<?php echo $_GET['id'] ?>" class="list-group-item">Review and rate</a>
          <a href="faq.php?id=<?php echo $id; ?>" class="list-group-item">FAQ</a>
          <a href="404.php?id=<?php echo  $id; ?>" class="list-group-item">404</a>
          
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <h2>Average Rating <small> over 10 </small> </h2>
        <p> <?php echo $ro['average'];?> </p>
		
		<h2>Sport(s)</h2>
        <p> <?php echo $sport; ?> </p>
		
		<h2>Area</h2>
        <p> <?php echo $area; ?> M<sup> 2 </p>
		
		<h2>Hourly cost</h2>
        <p> <?php echo $hr; ?>$ </p>
		
		<h2> <a href="contact.php?id=<?php echo $id;?>"> See the location on map </a></h2>
        
		
		<h2>Notes</h2>
        <p> <?php echo $notes; ?> </p>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>">
	  <button name="selec" type="submit">Select time to reserve</button>
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
