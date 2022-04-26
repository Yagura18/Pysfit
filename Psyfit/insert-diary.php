<?php
require 'session.php';
include_once "config.php";

$username = $_SESSION['username'];
$txt=$_POST['journal'];

if(!empty($txt)){
    $sql= "INSERT INTO journal (txt,username) VALUES ('$txt','$username') ";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
      echo "Inserted!";
    }
    else {
      echo("Error description: " . mysqli_error($conn));
    }
}
 ?>
