<!DOCTYPE html>
<?php
session_start();
if(isset($_POST['submitadmin'])){
            $city = $_POST["city"];
			$type = $_POST['type'];
			$actname = $_POST['act_name'];
            $conn = mysqli_connect("localhost", "root", "", "sportify");
			$newsql = "INSERT INTO newactssubmissions (`id`, `actname`, `date`, `type`, `longitude`,`latitude`,`adminid`,`scid`) VALUES (NULL, '$actname', '".date("Y-m-d")."', '$type', 0, 0,". $_GET['adminid'].", '".$_GET['scid']."');";
			
			
            $result = mysqli_query($conn, $newsql);
            header("location:newactmap.php?city=".$city);

}
?>
<html lang="en" >	

<head>
  <meta charset="UTF-8">
  <title>New GYM/Facility</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="css/adminsignstyle.css">

  
</head>

<body>

      <div class="container">

    <form class="well form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>New Facility Form</b></h2></center></legend><br>

<!-- Text input-->


<div class="form-group">
  <label class="col-md-4 control-label">Facility Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
  <input  name="act_name" placeholder="Name of your facility/GYM" class="form-control"  type="text" required>
    </div>
  </div>
</div>



  <div class="form-group"> 
  <label class="col-md-4 control-label">Type</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="type" class="form-control selectpicker" required>
      <option value="1">GYM</option>
      <option value="2">Other</option>      
    </select>
  </div>
</div>
</div>
  
  <div class="form-group"> 
  <label class="col-md-4 control-label">City of this facility</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
    <select name="city" id="city" class="form-control selectpicker" required>
      <option value="LB-AK">Akkar</option>
      <option value="LB-BH">Baalbek</option>
      <option value="LB-BA">Beirut</option>
      <option value="LB-BI" >Beqaa</option>
      <option value="LB-JL">Mount Lebanon</option>
      <option value="LB-NA">Nabatieh</option>
      <option value="LB-AS">North</option>
      <option value="LB-JA" >South</option>
      
    </select>
  </div>
</div>
</div>
  

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button formmethod="post" type="submit" name="submitadmin" class="btn btn-success">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  

    <script  src="js/adminsignindex.js"></script>




</body>

</html>