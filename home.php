<!DOCTYPE html>
<?php
session_start();
$u = $_GET['u'];
$conn = mysqli_connect("localhost", "root", "", "sportify");
$locquery = "select client.longitude, client.latitude from client where un = '$u'";
$fnqu = "select id, fname from client where un = '".$_GET['u']."'";
//echo $fnqu;
$result = mysqli_query($conn, $locquery);
$resul = mysqli_query($conn, $fnqu);
$row = mysqli_fetch_array($result);
$ro = mysqli_fetch_array($resul);

$_SESSION['u'] = $u;
$_SESSION['cid'] = $ro['id'];
$_SESSION['firstname'] = $ro['fname'];

$_SESSION['ulg']= $row['longitude'];
$_SESSION['ult']= $row['latitude'];

$latitude = $_SESSION['ult'];
$longitude = $_SESSION['ulg'];

?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">		


  <!-- Custom styles for this template -->
	<link href="css/modern-business.css" rel="stylesheet">
<style>
#hey {
	
	margin-left: 382px;
	
}

</style>
<script>
	var temparature; 
	 let API_KEY = 'c0ccb1ba6235e269fbbe4fc8d5e5394d';

function getWeather(latitude, longtitude) {
  $.ajax({
    url: 'http://api.openweathermap.org/data/2.5/weather',
    async: false,
	data: {
      lat: latitude,
      lon: longtitude,
      units: 'imperial',
      APPID: API_KEY
    },
    success: data => {
		temparature = data["main"]["temp"];
      // alert(temparature);
    }
  })
}
getWeather(<?php echo $latitude; ?>, <?php echo $longitude; ?>);



//document.getElementById('test').innerHTML = temparature;

function check(temparature){
//alert(temparature);
window.open("execPyClient.php?u=<?php echo $u; ?>&t=" + temparature, "_self");
}	 	
</script>




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

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('basket.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Reserve</h3>
            <p>The most suitable mini-stadium, pitch or any arena</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('foot.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Gather your friends</h3>
            <p>Just one of you needs to book and you are ready!</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('gym.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>And GO!</h3>
            <p>Launch your sport activities whatever it is!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to Sportify <?php echo $_SESSION['firstname'];?> </h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Reserve a court</h4>
          <div class="card-body">
            <p class="card-text"> Gather your friends and reserve for a football, basketball, volley or even a tennis playground. After checking the available times and pricing.</p>
          </div>
          <div class="card-footer">
            <a href="searchpgs.php" class="btn btn-primary">Reserve</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Subscribe to a GYM</h4>
          <div class="card-body">
            <p class="card-text">Subscribe to your prefered GYM with one click. and pay upon arrival.</p>
          </div>
          <div class="card-footer">
            <a href="searchgyms.php" class="btn btn-primary">Subscribe</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Contact a Personal Trainer</h4>
          <div class="card-body">
            <p class="card-text">Get a professional personal fitness training by the most upvoted trainer.</p>
          </div>
          <div class="card-footer">
            <a href="searchtrainers.php" class="btn btn-primary">Search</a>
          </div>
        </div>
      </div>
    </div>
    
	
	<hr>
<div class="row">
	<div class="col-lg-4 mb-4" id="hey" >
        <div class="card h-100">
          <h4 class="card-header">Check Crowdedness at GYMs now</h4>
          <div class="card-body">
            <p class="card-text"> <?php  if(isset($_GET['c'])){ 
			$c = $_GET['c'];
	
	if($c <= 9){ echo " <span style='font-size:30px; background-color: #79D1F3; ' class='label label-info'  > LOW: GYMs right now are not crowded </span> "; }
	else if($c > 9 && $c <= 43){ echo "<span style='font-size:20px; background-color: #FC8C42;' class='label label-warning'>MEDIUM: GYMs now are moderately crowded </span>"; }
	else if($c > 43){ echo "<span style='font-size:20px; background-color: #B20710;' class='label label-danger' > HIGH: GYMs at this time are very crowded ss</span>"; }
}
else
echo "Check Crowdedness level at the mean time in GYMs.";?></p>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" onClick="check(temparature)" > Check Now </button>
          </div>
        </div>
      </div>
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
  
</body>

</html>
