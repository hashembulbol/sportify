<!DOCTYPE html>
<html lang="en" >
<?php
session_start();
$ulg = $_SESSION['ulg'];
$ult = $_SESSION['ult'];
?>
<head>
  <meta charset="UTF-8">
  <title>Search Facilities</title>
  <meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
  
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <link rel="stylesheet" href="css/searchpgs.css"> 
<style>

#myTable th{
	background-color: #318EBB;
	width: 400px;
	color: #FFFFFF;
}
a{
	color: #black;	
	text-decoration:none;
}
a:hover {
	text-decoration:underline;
	
}
#myTable td{
	text-align: center;
	background-color: #AFEEEE;
	width: 400px;
	color: black;
}

#defTable th{
	background-color: #318EBB;
	width: 400px;
	color: #FFFFFF;
}
#txtHint{
	margin-left: 180px; 	
	margin-top: 80px; 	
	
}


</style>
</head>
<body>
  <header>
  <nav>
     <div class="search-bar">
       <form autocomplete="off" class="search">
		 <input type="search" class="search__input" name="search" placeholder="Search" onkeyup="showHint(this.value)" onload="equalWidth()" required>
         <button class="search__btn">Search</button>
         <i class="ion-ios-search search__icon"></i> 
	   </form>
    </div>  
  </nav>
</header>
	
<!-- <th> Name </th> <th> Distance </th> <th> Average Rating </th> -->
	<div id="txtHint">
	<table id= "defTable"> <th> Name </th> <th> Distance (KM)</th> <th> Average Rating </th> </table>
	</div>
    <script  src="js/searchpgs.js"></script>
</body>
</html>
