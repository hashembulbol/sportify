<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","sportify");

session_start();
$cid = $_SESSION['cid'];

$id = $_GET['id'];
$revq = "SELECT review.rate, review.text, review.date, client.fname, client.lname from review INNER join revsub ON revsub.rid = review.id INNER join activity on revsub.actid = activity.id INNER JOIN client on client.id = revsub.cid where revsub.actid = $id order by review.date desc";
$res = mysqli_query($con, $revq);

$typeQ = "SELECT type from activity where id=$id";
$Typeres = mysqli_query($con, $typeQ);
$rrr = mysqli_fetch_array($Typeres);
$t = $rrr[0];

if(isset($_POST['comment'])){
	
	$insq = "INSERT INTO `review` (`id`, `text`, `date`, `rate`) VALUES (NULL, '".$_POST['text']."', '".date("Y-m-d")."', '".$_POST['rate']."');";
	echo $insq;
	
	$ins = mysqli_query($con, $insq);
	$comq = "INSERT INTO `revsub` (`id`, `rid`, `cid`, `actid`) VALUES (NULL, '".mysqli_insert_id($con)."','$cid','$id')";
	echo $comq;
	$com = mysqli_query($con, $comq);
	header("location:reviews.php?id=".$id);
}
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reviews</title>

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
    <h1 class="mt-4 mb-3">Reviews
      </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="activityredi.php?id=<?php echo $id."&t=$t"; ?>"> Home</a>
      </li>
      <li class="breadcrumb-item active">Reviews</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <hr>
        <!-- Post Content -->
        <p class="lead"> This is the comments forum. please be objective and respectful</p>

        <p>Make your rating and review dependent on the general atmo. tools and staff members</p>

       

      
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Write your review:</h5>
          <div class="card-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>">
			
				Rate of 10 <input type="number" name="rate"> 
				
              <div class="form-group">
<br>               
			   <textarea name="text" class="form-control" rows="3"></textarea>
              </div>
              <button  name ="comment" type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>


<?php while($rev = mysqli_fetch_array($res)){    
echo "<div class='media mb-4'>";
echo  "<div class='media-body'>";
echo "<h5 class='mt-0'>". $rev['fname']." ". $rev['lname']."</h5>";
echo $rev['text'];
echo "<br>";
echo $rev['rate']. " out of 10" ;
echo "</div>";
echo "On ". $rev['date'];
echo "</div>";
echo "<hr>";
}?>
      


      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
      </div>

    </div>
    <!-- /.row -->

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
