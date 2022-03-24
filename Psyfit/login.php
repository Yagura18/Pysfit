<?php
    session_start();
    $_SESSION["user_status"]="logged_out";
    $_SESSION["username"]="";
    session_destroy();
?>
<html>
<head>
<link rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
       <link rel="stylesheet" href="./css/login.css">
  </head>
  <body>
    <div class="bg-img">
       <div class="content">
           <header>Welcome <br>To<br> PsyFit</header>
           <form  method="post" action="./logp.php" >

              <div class="field">
                 <span class="fa fa-user"></span>
                 <input type="email" name="email" required placeholder="Email or Phone" required=Email>
              </div>

              <div class="field space">
                 <span class="fa fa-lock"></span>
                 <input type="password" name="password" id="pswd" class="pass-key" required placeholder="Password" minlength=6>
                 <span class="show">SHOW</span>
              </div>
              <br>
              <div class="field">
                 <input type="submit" name="submit" value="Login" >
              </div>
           </form>
          <br>

           <div class="signup">
            Don't have an account?
              <a href="./registration.php">Signup!</a>
           </div>
         </div>
       </div>

       <script src="./js/login.js"></script>
  </body>
</html>
