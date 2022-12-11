<!DOCTYPE html>
<?php
session_start();
$un = $_SESSION["u"];
//echo $un;
//echo "hehe";
if(isset($_POST["fin"])){
$clientbd = $_POST['clientdob'];
$flvl = $_POST['flvl'];
$p = $_POST['contact_no'];
$conn = mysqli_connect("localhost", "root", "", "sportify");
$newsql = "UPDATE client SET birthdate = '$clientbd', fitlevel = '$flvl', phone ='$p' where un = '$un';";
//$_SESSION['que'] = $newsql;
//echo $newsql;
$result = mysqli_query($conn, $newsql);
header("location:redi.php?lon=".$_POST['new1']."&lat=".$_POST['new2']);
}
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Complete Registration</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<link rel="stylesheet" href="css/adminsignstyle.css">
</head>
<body>
      <div class="container">
    <form class="well form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  id="contact_form">
<fieldset>
<legend><center><h2><b>Complete Registration</b></h2></center></legend><br>
<div class="form-group"> 
  <label class="col-md-4 control-label">Your Fitness Level</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="flvl" id="flvl" class="form-control selectpicker" >
      
      
      
      <option value="5" >Athlete</option>
      <option value="4">HIGH</option>
      <option value="3">FAIR</option>
      <option value="2">AMATURE</option>
      <option value="1" >BEGINNER</option>
      
    </select>
  </div>
</div>
</div>
  
 
<div class="form-group">
  <label class="col-md-4 control-label">Birthdate</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="clientdob"  class="form-control" type="date" required>
    </div>
  </div>
</div>
       <input type=hidden id="longi" name="new1"> <input type=hidden id="lati" name="new2">
<div class="form-group">
  <label class="col-md-4 control-label">Phone Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" class="form-control" type="text" required>
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
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="submit" name="fin" onclick="btnClk()" formmethod="post" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFINISH <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  

    <script  src="js/clientcompletereg.js"></script>

<script>  


</script>


</body>

</html>
