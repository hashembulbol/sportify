<!DOCTYPE html>
<html>
<head>

<title> Pick location </title>

<script type="text/javascript">
var Loclon;
var Loclat;
function btnc(){
window.open('editpg.php?id=<?php echo $_GET['id']; ?>&lon=' + Loclon + '&lat=' + Loclat, "_self");
}
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(33.8547,35.8623),
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