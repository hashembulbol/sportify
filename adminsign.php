<!DOCTYPE html>
<?php

if(isset($_POST['submitadmin'])){
	
            $newadminun = $_POST['admin_username'];
            $newadminpw = $_POST['admin_password'];
			if($_POST['admin_password'] != $_POST['confirm_password'] ){
				
			echo "<h1> passwords does not match </h1>";
			
			}
			else {
			$fn = $_POST['first_name'];
            $ln = $_POST['last_name'];
			$city = $_POST["city"];
			$email = $_POST['email'];
			$type = $_POST['type'];
			$clubname = $_POST['club_name'];
			$actname = $_POST['act_name'];
			$contact_no = $_POST['contact_no'];
			$dob = $_POST['dob'];
            $conn = mysqli_connect("localhost", "root", "", "sportify");
			$newsql1 = "select id from adminsubmissions where un = '$newadminun';";
			$result1 = mysqli_query($conn, $newsql1);
			if(mysqli_num_rows($result1) > 0){ echo " <h1> Username exist </h1>"; }
			else{
			$newsql = "INSERT INTO adminsubmissions (`id`, `fname`, `lname`, `phone`, `birthdate`,`un`, `pw`, `email`,`clubname`, `actname`,`date`, `type`) VALUES (NULL, '$fn', '$ln', '$contact_no', '$dob', '$newadminun', '$newadminpw', '$email', '$clubname', '$actname', '".date("Y-m-d")."', '$type');";
            echo $newsql;
            $result = mysqli_query($conn, $newsql);
            session_start();
			$_SESSION['adfn'] = $fn;
			$_SESSION['newadminun'] = $newadminun;
			header("location:map.php?city=".$city);
			}}
}
?>
<html lang="en" >	

<head>
  <meta charset="UTF-8">
<title> Manager Sign Up</title>
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
<legend><center><h2><b>Manager and Club Registration</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Your main facility <br> (You can add more later) </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="type" class="form-control selectpicker">
      <option value="1">GYM</option>
      <option value="2">Other</option>
      
    </select>
  </div>
</div>
</div>
  
  <div class="form-group"> 
  <label class="col-md-4 control-label">City of your main facility</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
    <select name="city" id="city" class="form-control selectpicker">
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
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="admin_username" placeholder="Username" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Club Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
  <input  name="club_name" placeholder="i.e: The Professional Club" class="form-control"  type="text">
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label">Facility Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
  <input  name="act_name" placeholder="i.e: Professional Club GYM" class="form-control"  type="text">
    </div>
  </div>
</div>




<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="admin_password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Date of Birth</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="dob" class="form-control"  type="date">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(961)" class="form-control" type="text">
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