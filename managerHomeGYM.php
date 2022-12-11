<html>
<head>
<link rel="stylesheet" type="text/css" href="css/managerHomeGYM.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title> Manager Home </title>
<style>
.content #openweathermap-widget-22 {
	
	
	margin-left: 450px;
}

</style>
</head>




<body>


<?php require("managerSidebarGym.php");
$cityid = 266826;

 ?>
<!-- Page content -->
<div class="content">




<div id="openweathermap-widget-22"> </div>
<script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 22,cityid: '<?php echo $cityid; ?>',appid: 'c0ccb1ba6235e269fbbe4fc8d5e5394d',units: 'metric',containerid: 'openweathermap-widget-22',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>


<br><br><br>

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
//       alert(temparature);
    }
  })
}
getWeather(<?php echo $latitude; ?>, <?php echo $longitude; ?>);



//document.getElementById('test').innerHTML = temparature;

function check(temparature){
window.open("execPy.php?id=<?php echo $id; ?>&t=" + temparature, "_self");
}
	 	
</script>









<div id="crowds"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button id = "check" onclick = "check(temparature)">Crowdedness Prediction </button>
<?php if(isset($_GET['c'])){
	$c = $_GET['c'];
	
	if($c <= 9){ echo " <span style='font-size:50px' class='label label-info'> LOW: GYMs right now are not crowded </span> "; }
	else if($c > 9 && $c <= 43){ echo "<span style='font-size:30px' class='label label-warning'>MEDIUM: GYMs now are moderately crowded </span>"; }
	else if($c > 43){ echo "<span style='font-size:100px' class='label label-danger'> HIGH: GYMs at this time are crowded</span>"; }
		
} ?>


</div>




</div>




</body>
</html>