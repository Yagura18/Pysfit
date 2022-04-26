<?php
require 'session.php';
include_once 'config.php';
$currentemail=$_SESSION["username"];
$sql = "SELECT status FROM users where email='$currentemail'";
$result = mysqli_query($conn, $sql);
$status="";
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $status=$row["status"];
    }
    if($status!="null")
    {
    echo "1";
    }

  }
 ?>
