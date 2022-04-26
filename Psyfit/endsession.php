<?php
include_once 'config.php';
if(isset($_POST['endss'])) {
  $usr2=$_POST['cname'];
  $usr1=$_POST['uname'];
  $sq1="UPDATE users SET status = 'null' WHERE username='$usr1'";
  $sq2="UPDATE users SET status = 'null' WHERE email='$usr2'";
  $rs1= mysqli_query($conn, $sq1);
  $rs2= mysqli_query($conn, $sq2);
  $sq3="DELETE FROM messages WHERE incoming_msg_id='$usr1' OR outgoing_msg_id='$usr1' AND incoming_msg_id='$usr1' OR outgoing_msg_id='$usr1'";
  $rs3= mysqli_query($conn, $sq3);
  $url="./home.php";
  header('Location: '.$url);
 }
 ?>
