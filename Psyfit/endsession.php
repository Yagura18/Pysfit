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
if(isset($_POST['endss'])) {
  $usr1=$_POST['uname'];
  $usr2=$_POST['cname'];
  echo '<script>alert("'.$usr.'")</script>';
  $sq1="UPDATE users SET status = 'null' WHERE username='$usr1'";
  $sq2="UPDATE users SET status = 'null' WHERE email='$usr2'";
  $rs1= mysqli_query($conn, $sq1);
  $rs2= mysqli_query($conn, $sq2);
  $url="./home.php";
  header('Location: '.$url);
 }
 ?>
