<?php
require 'session.php';
include_once "config.php";
$username = $_POST['username'];
$txt=$_POST['journal'];

if(!empty($message)){
    $sql= "INSERT INTO journal (journal,username) VALUES ('{username}', '{$txt}')";
    $result = mysqli_query($conn,$sql);
}
}
 ?>
