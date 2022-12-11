<!DOCTYPE html>
<?php 
require("getall.php");
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gallery</title>

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
    <h1 class="mt-4 mb-3">Gallery
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="activityredi.php?id=<?php echo $id."&t=$type"; ?>">Home</a>
      </li>
      <li class="breadcrumb-item active"> Gallery </li>
    </ol>

<?php 
$getpics = "select * from picture where actid =". $id;
$getpicsr = mysqli_query($con, $getpics);

while($picRow  = mysqli_fetch_array($getpicsr)) {
	echo " <div class='row'> <div class='col-md-7'>";
	echo "<a href='#'>";
	echo " <img class='img-fluid rounded mb-3 mb-md-0' src='gallery/".$picRow['img']."' >";
	echo "</a> </div>
      <div class='col-md-5'>";
	echo "<p>". $picRow['description']. " <br>In ". $picRow['date'] ."</p>";
	echo "
	    <a class='btn btn-primary' href='gallery/".$picRow['img']."'>View Full Size
          <span class='glyphicon glyphicon-chevron-right'></span>
        </a>
      </div>
    </div>
    <hr>

	";
	
}


 ?>
   

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
