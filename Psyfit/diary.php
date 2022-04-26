<?php
 require './session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2b500c01fa.js" crossorigin="anonymous"></script>
    <title>Your journal</title>
    <link rel="stylesheet" href="./css/diary.css">
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
  <div class="tg">
  <span class="tgtext">Quote of the day</span>
  <div class="tgbox">
  <?php
  echo $_SESSION["quote"];
  ?>
  </div>
  </div>
  <div class="cg">
    <span class="cgtext">Your Notes</span>
    <div class="cgbox" id="cb">
    </div>
  </div>
  <div>
  <button name="button1"  class="noselect"  onclick="openForm()" >+</button>
    <button onclick="window.location.replace('./login.php')" class="lout">Logout</button>
</div>

    <div class="form-popup" id="myForm">

    <form action="" class="form-container">
      <p class="title">Journal entry</p>
      <textarea  id="note" placeholder="Enter note" name="txt" required style=" resize: none;"> </textarea>
      <button type="button" onclick="send()" class="btn-submit">Submit</button>
      <button type="button" class="btn-cancel" onclick="closeForm()">Close</button>
    </form>
  </div>

  </div>
  <script src="./js/diary.js"></script>
</body>
</html>
