<?php
    require './session.php';
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/2b500c01fa.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/home.css">
</head>
<body>


<div class="bgimg">
<div class="content">
      <span class="greet">Greetings,Psyfer</span>
<br>
<div class="settings">
<i class="fa-solid fa-user" style="padding-bottom:10px; padding-top:10px;"></i>
<i class="fa-solid fa-book"  style="padding-bottom:10px;"></i>
<i class="fa-solid fa-music" style="padding-bottom:10px;"></i>
</div>

<div class="tg">
<span class="tgtext">Today’s Goal</span>
<div class="tgbox">
<span>1.</span><span class="tgt">Take a hot shower before bed</span><br>
<span>2.</span><span class="tgt">Call an old friend</span>
</div>
</div>


<div class="cg">
  <span class="cgtext">Completed Goals</span>
  <div class="cgbox">
  <span>1.</span><span class="cgt">Clean your workspace</span><br>
  <span>2.</span><span class="cgt">Go out for a walk in evening</span><br>
  <span>3.</span><span class="cgt">Watch a movie with your friends or family</span><br>
  <span>4.</span><span class="cgt">Drink atleast 6 glasses of water</span><br>
  <span>5.</span><span class="cgt">Take 5 deep breaths before starting your work</span><br>
  <span>5.</span><span class="cgt">Take 5 deep breaths before starting your work</span><br>
  <span>5.</span><span class="cgt">Take 5 deep breaths before starting your work</span><br>
  <span>5.</span><span class="cgt">Take 5 deep breaths before starting your work</span><br>
  </div>
</div>
  <button onclick="window.location.replace('./login.php')" class="lout">Logout</button>
</div>

</div>

</body>
</html>
