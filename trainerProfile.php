<!DOCTYPE html>
<?php $tid = $_GET["id"];
$con=mysqli_connect("localhost","root","","sportify");





if(isset($_POST['upv']) ){
$votedUp = true;
$upvq = "UPDATE trainer SET votes = votes + 1 where id = $tid";	
mysqli_query($con, $upvq);

}

else if(isset($_POST['downv']) ){
$votedDown =true;
$downvq = "UPDATE trainer SET votes = votes - 1 where id = $tid";
mysqli_query($con, $downvq);

}

$getTrainer = "select * from trainer where id = $tid";
$r = mysqli_query($con, $getTrainer);
while($trainerData = mysqli_fetch_array($r)){
	$fn  = $trainerData['fname'];
	$ln  = $trainerData['lname'];
$p  = $trainerData['phone'];
$fb  = $trainerData['fb'];
$ig  = $trainerData['ig'];
$linkedin  = $trainerData['linkedin'];
$votes  = $trainerData['votes'];
$brief  = $trainerData['brief'];
$bd  = $trainerData['birthdate'];
}

 ?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'>

      <link rel="stylesheet" href="css/likestyle.css">

    <title> <?php echo $fn." ". $ln; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
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

<div>
	
	
	
	
</div>

  <!-- Page Content -->
  <div class="container">


    <h1 class="mt-4 mb-3"> <?php echo $fn. " ". $ln; ?>
     
    </h1>


    <p> <?php echo $brief; ?> </p>
	
	<hr>
	
	  <h3> Contact </h3>
	  Phone number: <?php echo $p; ?>
	  <br>
	  Facebook: <a href="<?php echo $fb;?>"> <?php echo $fb;?> </a> 
	  <br>
	  LinkedIn: <a href="<?php echo $linkedin;?>"> <?php echo $linkedin; ?> </a> 
	  <br>
	  Instagram: <a href="<?php echo $ig;?>"> <?php echo $ig;?> </a> 
      <br>
	<hr>
	
	<p> Your voice matters </p>
	<br><br>
	
	
	<div class="rating">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=$tid"; ?>">	
			<button type="submit" class="button rating-up fa fa-thumbs-o-up" aria-hidden="true" name="upv">  </button>
			<button type="submit" class="button rating-down fa fa-thumbs-o-down" aria-hidden="true" name="downv">  </button>
			<span class="counter"> Votes <?php echo $votes; ?> </span>
		</form>
	</div>
  </div>
  

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
 <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  

    <script  src="js/likeindex.js"></script>


</body>

</html>
