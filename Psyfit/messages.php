<?php
 require 'session.php';
$hostname = "localhost";
$usr = "root";
$password = "";
$dbname = "psyfit";
$conn = mysqli_connect($hostname, $usr, $password, $dbname,"3308");
if(!$conn){
  echo "Database connection error".mysqli_connect_error();
}
$status="";
$currentemail=$_SESSION["username"];
$currentusername="";
$sql = "SELECT username,status FROM users where email='$currentemail'";
$result = mysqli_query($conn, $sql);
$username;
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $status=$row["status"];
    $currentusername=$row["username"];
  }
}
if($status!="null")
{
  $username=substr($status,8);
}
else {
  $sql = "SELECT * FROM users where status NOT LIKE '%Occupied%' AND email!='$currentemail' ORDER BY RAND() LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $username;
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $username=$row["username"];
    }
    $stat1="Occupied".$username;
    $stat="Occupied".$currentusername;
    $sql1="UPDATE users SET status ='$stat' WHERE username='$username'";
    $sql2="UPDATE users SET status = '$stat1' WHERE email='$currentemail'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
}
else {
  $url="./wait.php";
  header('Location: '.$url);
}

}

 ?>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Meet a Psyfer!</title>
  <link rel="stylesheet" href="./css/message.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="content">
      <div class="head1">
    <div class="head2">
        <img src="https://picsum.photos/200/300?" style=" height:40px; width:40px; border-radius:50%;">
        <span class="uname" style="margin-left:-70px; margin-top:5px;" >Psyfer</span>
        <form method="post" action="endsession.php">
          <button type="submit" name="endss" class="lout">End session</button>
         <input type="text" name="uname" value="<?php echo htmlspecialchars($username); ?>" hidden>
        <input type="text" name="cname" value="<?php echo htmlspecialchars($currentemail); ?>" hidden>
      </form>
    </div>
    <hr style="width:400px">
   </div>
   <div class="chat-area" id="ca">
     <div class="chat-box" id="cb">

     </div>
    </div>
    <div class="txtbar">
       <form action="#" class="typing-area">
       <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $username; ?>" hidden>
       <input type="text" name="message" class="input-field" placeholder="Type a message here..."  autocomplete="off">
       <button onclick="send()"><i class="fab fa-telegram-plane"></i></button>
     </form>
   </div>
  </div>

<script src="./js/chat.js"></script>

</body>
</html>
