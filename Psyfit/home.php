<?php
 require 'session.php';
 $hostname = "localhost";
 $username = "root";
 $password = "";
 $dbname = "psyfit";
 $conn = mysqli_connect($hostname, $username, $password, $dbname,"3308");
 if(!$conn){
   echo "Database connection error".mysqli_connect_error();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2b500c01fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
<div class="content">
      <span class="greet">Greetings,Psyfer</span>
<br>
<div class="settings">
  <a href="home.php">
    <i class="fa-solid fa-user" style="color:aliceblue; padding-bottom:10px; padding-top:10px;"></i>
  </a>
  <a href="diary.php">
    <i class="fa-solid fa-book"  style="color:aliceblue; padding-bottom:10px;"></i>
  </a>
  <a href="messages.php">
    <i class="fa-solid fa-comments" style="color:aliceblue; padding-bottom:10px;"></i>
  </a>
  <a href="tnc.html">
    <i class="fa-solid fa-scroll" style="color:aliceblue; padding-bottom:10px;"></i>
  </a>
  <a href="privacypolicy.html">
    <i class="fa-solid fa-key" style="color:aliceblue; padding-bottom:10px;"></i>
  </a>
  <a href="aboutus.html">
    <i class="fa-solid fa-circle-info" style="color:aliceblue; padding-bottom:10px;"></i>
  </a>
  <button id="music" onclick="pause()" style="background-color: rgba(255, 255, 255, 0); border: none; padding: 0;">
     <i class="fas fa-volume-up" style="color:aliceblue; padding-bottom:10px;" id="music-btn" ></i>
</button>
      <audio id="mymusic">
       <source src="./bgmusic/home.mp3">
      </audio>
  </script>
</div>
<br>

<div class="tg">
<span class="tgtext">Today’s Goal</span>
<div class="tgbox">
<div id="tgt1" ><?php echo $_SESSION['goal1'] ?></div>
<div id="tgt2"><?php echo $_SESSION['goal2'] ?></div>
<div id="tgt3"></div>
</div>
</div>

<div class="cg">
  <span class="cgtext">Completed Goals</span>
  <div class="cgbox" id="cgbox">
    <div id="cgt1"></div>
    <div id="cgt2"></div>
    <div id="cgt3"></div>
  </div>
</div>
<div class="ldiv">
  <button onclick="window.location.replace('./login.php')" class="lout">Logout</button>
  <button name="button1" id="addgoal"  class="noselect"  onclick="openForm()" >+</button>
</div>

</div>
<div class="form-popup" id="myForm">

<form action="" class="form-container">
  <p class="title">Set a daily goal</p>
  <textarea  id="note" placeholder="Remember you can only set 1 goal for a day!" name="txt" required style=" resize: none;"></textarea>
  <button type="button" onclick="send()" class="btn-submit">Submit</button>
  <button type="button" class="btn-cancel" onclick="closeForm()">Close</button>
</form>
</div>
<script src="./js/home.js"></script>
</body>
</html>
