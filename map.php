<!DOCTYPE html>
<?php
$lon;
$lat;
switch ($_GET["city"]) {
    case "LB-AK":
        $lat = 34.5440;
		$lon = 36.0798;
        break;
    case "LB-BH":
        $lat = 34.0047;
		$lon = 36.2110;
		break;
    case "LB-BA":
        $lat = 33.8938;
		$lon = 35.5018;
		break;
	case "LB-BI":
        $lat = 33.8463;
		$lon = 35.9019;
		break;
    case "LB-JL":
        $lat = 33.8101;
		$lon = 35.5973;
		break;
    case "LB-NA":
        $lat = 33.3772;
		$lon = 35.4836;
		break;
	case "LB-AS":
        $lat = 34.4381;
		$lon = 35.8308;
		break;
	case "LB-JA":
        $lat = 33.2721;
		$lon = 35.2033;
		break;
    default:
        //echo "Your favorite color is neither red, blue, nor green!";
}
?>
<html>
<head>
<script type="text/javascript">
var Loclon;
var Loclat;
function btnc(){
window.open('adminThanks.php?lon=' + Loclon + '&lat=' + Loclat, "_self");
}
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lon;?>),
  zoom:15,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var arr = [];
google.maps.event.addListener(map, 'click', function( event ){
Loclon = event.latLng.lng(); //arr[0] = Loclon; alert(arr[0]);
Loclat = event.latLng.lat(); //arr[1] = Loclat;
});
}
</script>
</head>
<body>

<h1>Locate your main facility in the map</h1>

<div id="googleMap" style="width:100%;height:500px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsEVTJGU_WnAnXMbya3YFEEo-Pg0aCkiE&callback=myMap"></script>
<button type="button" name="locsub" onclick="btnc()">Submit Location</button>

</body>
</html>