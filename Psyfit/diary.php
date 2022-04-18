<?php
 require './session.php';
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/2b500c01fa.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/diary.css">
<link rel="./js/diary.js" rel="javascript">
</head>
<body>


<div class="bgimg">
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

<i class="fa fa-solid fa-volume-high" style="color:rgb(0, 133, 250); padding-bottom:10px;">
</i>
<script>
    $(".fa").click(function () {
        $(".fa").toggleClass("fa-music fa-volume-xmark");
    });
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
  <div class="cgbox">



  </div>
</div>
<form class="" action="">
<input type="submit" name="button1" value="+" class="noselect"  onclick="openForm()" ></input>
</form>
  <button onclick="window.location.replace('./login.php')" class="lout">Logout</button>
  <div class="form-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Write your journal</h1>

    <label for="txt"><b>Enter text</b></label>
    <input type="text"  class="note" placeholder="Enter note" name="txt" required>
     <input type="text"  class="email" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" hidden>
    <button type="submit" class="btn">Submit</button>
    <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
  </form>
</div>
</div>

</div>

</body>

</html>
