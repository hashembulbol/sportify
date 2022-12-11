<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign in or Register</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/formstyle.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fn" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="ln" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="newun" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name= "newpw" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="signup" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name= "user" required autocomplete="off"/>
          
		  </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req" name="pass">*</span>
            </label>
            <input name="pass" type="password"required autocomplete="off"/>
			
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" name="submit" class="button button-block" formmethod="post"/>Log In</button>
          
          </form>

        </div>
        
      </div>
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>


<?php


if (isset($_POST['submit'])) {
	/* echo $_POST['user'];
		echo $_POST['pass']; */

    if (empty($_POST['user']) || empty($_POST['pass']))
        echo "Username or Password is empty";
    else {
		
        $username = $_POST['user'];
        $password = $_POST['pass'];
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $con = mysqli_connect("localhost", "root", "", "sportify");
        $sql = "select * from client where pw='$password' 
		         AND un='$username'";
        $result = mysqli_query($con, $sql); 
        $nbrows = mysqli_num_rows($result); 
        if ($nbrows == 1) {

           /*  if (isset($_POST['remember']))
            setcookie("user", $username , time() + 3600, "/");
            setcookie("pass", $password , time() + 3600, "/"); */
            $res = mysqli_fetch_array($result);
            session_start();
           	$_SESSION['u'] = $username;
         	$_SESSION['p'] = $password;		
			header("location:home.php?u=" . $username);
        } else{
            echo "Username or Password is invalid";
		session_destroy();
		}
        mysqli_close($con); // Closing Connection
    }
}
if (isset($_POST["signup"])) {
	echo 'b';
    if ($_POST["ln"] && $_POST["fn"] && $_POST["newun"] && $_POST["newpw"]) {
            $newun = $_POST['newun'];
            $newpw = $_POST['newpw'];
            $fn = $_POST['fn'];
            $ln = $_POST['ln'];
            $conn = mysqli_connect("localhost", "root", "", "sportify");
			$newsql1 = "select id from client where un = '$newun';";
			$result1 = mysqli_query($conn, $newsql1);
			if(mysqli_num_rows($result1) > 0){ echo "Username exist"; }
			else {
			$newsql = "INSERT INTO `client` (`id`, `fname`, `lname`, `phone`, `birthdate`, `un`, `pw`, `fitlevel`, `longitude`, `latitude`) VALUES (NULL, '$fn', '$ln', '', '', '$newun', '$newpw', '', '', '');";
            echo $newsql;
            $result = mysqli_query($conn, $newsql);
            session_start();
			$_SESSION['u'] = $newun;
			$_SESSION['firstname'] = $fn;
            header("location:clientcompletereg.php");
			}
    } else
        echo "invaild input data";
}


?>
