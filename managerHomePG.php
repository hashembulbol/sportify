
<?php 
require("managerSidebarPg.php");
$cityid = 266826;
$chartfirstQu = "SELECT COUNT(id),date from reserve  where actid = $id group BY date order by date";
$chartFirstRes = mysqli_query($con,$chartfirstQu);


?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/managerHomePG.css" >
<title> Manager Home </title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
.content #openweathermap-widget-22 {
	
	
	margin-left: 450px;
}
</style>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Number of Reservations'],
          <?php 
			  while($chartRow = mysqli_fetch_array($chartFirstRes))
			  {  
					$numOfRes = $chartRow[0];
					$dateOfRes = $chartRow[1];
					
			  
		   ?>
          ['<?php echo $dateOfRes; ?>',<?php echo $numOfRes; ?>],
        
			  <?php } ?>
		]);

        var options = {
		
          title: 'Reservations',
          curveType: 'none',
          legend: { position: 'bottom' }
		  
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>




<body>

<!-- Page content -->
<div class="content">

<div id="openweathermap-widget-22"></div>
<br>
<script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 22,cityid: '<?php echo $cityid; ?>',appid: 'c0ccb1ba6235e269fbbe4fc8d5e5394d',units: 'metric',containerid: 'openweathermap-widget-22',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })(); </script>

<br>
<br>

&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="generateSchedule.php?id=<?php echo $id; ?>">  Generate weekly schedule </a>
 
 
    <div id="curve_chart" style="margin-left: 170px; width: 900px; height: 500px"></div>
</div>


 
</div>

</body>
</html>