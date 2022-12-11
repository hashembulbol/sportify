<!DOCTYPE html>
<?php

if (isset($_POST['fin'])) {
	
    if (empty($_POST['managerun']) || empty($_POST['managerpw']))
        echo "Username or Password is empty";
    else {
		
        $username = $_POST['managerun'];
        $password = $_POST['managerpw'];
        
        $username = stripslashes($username);
        $password = stripslashes($password);
        $con = mysqli_connect("localhost", "root", "", "sportify");
        $sql = "select * from admin where pw='$password' 
		         AND un='$username'";
        $result = mysqli_query($con, $sql); 
        $nbrows = mysqli_num_rows($result); 
        if ($nbrows == 1) {

           /*  if (isset($_POST['remember']))
            setcookie("user", $username , time() + 3600, "/");
            setcookie("pass", $password , time() + 3600, "/"); */
            $res = mysqli_fetch_array($result);
            session_start();
           	$_SESSION['managerun'] = $username;
         	$_SESSION['managerpw'] = $password;		
			header("location:receive.php");
           /*  if ($res['roleId'] == 1) {//admin
                header("location:adminInterface.php?u=" . $username) ;
            } else if ($res['roleId'] == 2)
                header("location:userInterface.php?u=" . $username); */
        } else{
            echo "Username or Password is invalid";
			session_destroy();
		}
        mysqli_close($con); // Closing Connection
    }
}
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Manager Sign In</title>
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
<legend><center><h2><b>SIGN IN</b></h2></center></legend><br>

 
<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="managerun"  class="form-control" type="text">
    </div>
  </div>
</div>
       
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
  <input name="managerpw" class="form-control" type="password">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4" style="margin-left: 50px;"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="fin" formmethod="post" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIGN IN <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

  

    <script  src="js/managersignin.js"></script>

<script>  


</script>


</body>

</html>
