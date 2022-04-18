<?php
if(isset($_POST['submit1']))
{
  function randomname()
   {
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  return "Psy".substr(str_shuffle($chars),0,rand(4,6));
   }
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $username=randomname();
  $server="localhost";
  $userdb="root";
  $dbpass="";
  $dbname="psyfit";
  $conn=mysqli_connect($server,$userdb,$dbpass,$dbname,"3308");
  if($conn->connect_error)
		{
			die("Connection failed: ".mysqli_connect_error());
		}

		$sqlcheckuser="SELECT * FROM users WHERE username='$username'";
		$test= mysqli_query($conn,$sqlcheckuser);
		if(mysqli_num_rows($test))
		{
	   $username=randomname();
		}
		else{
			$sqlcheckmail="SELECT * FROM users WHERE email='$email'";
			$testmail= mysqli_query($conn,$sqlcheckmail);
			if(mysqli_num_rows($testmail))
			{
				echo '<script type="text/JavaScript">
				alert("Email Already Exist");
				</script>';
			}
			else{
  $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$pass')";
  if($conn->query($sql)===TRUE)
  {
  echo '<script type="text/JavaScript">
  alert("Register Successfull");
  window.location.replace("home.php")
  </script>';
  ;
  }
  else
  {
  echo "Error: ".$sql."<br>".$conn->error;
  }
}
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
       <link rel="stylesheet" href="./css/registration.css">
  </head>
  <body>
    <div class="bg-img">
       <div class="content">
           <header>Register <br>To<br> PsyFit</header>

           <form  method="post"onsubmit="check(event)">

              <div class="field">
                 <span class="fa fa-user"></span>
                 <input type="email" name="email" required placeholder="Email or Phone" required=Email>
              </div>

              <div class="field space">
                 <span class="fa fa-lock"></span>
                 <input type="password" name="pass" id="pswd" class="pass-key" required placeholder="Password" minlength=6>
                 <span class="show">SHOW</span>
              </div>

              <div class="field space">
                 <span class="fa fa-lock"></span>
                 <input type="password" name="pass" id="cpswd" class="cpass-key" required placeholder="Confrim Password" minlength=6>
                 <span class="cshow">SHOW</span>
              </div>
              <br>
              <div class="field">
                 <input type="submit" name="submit1" value="Create an account" >
              </div>
           </form>
          <br>

           <div class="login">
            Already have an account?
              <a href="./login.php">Login</a>
           </div>
         </div>
       </div>


       <script src="./js/registration.js"></script>
  </body>
</html>
