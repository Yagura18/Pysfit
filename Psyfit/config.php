<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "psyfit";

  $conn = mysqli_connect($hostname, $username, $password, $dbname,"3308");
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
