<?php
        require 'session.php';
        include_once "config.php";
        $currentemail=$_SESSION["username"];
        $sql = "SELECT * FROM users where  email='$currentemail'";
        $result = mysqli_query($conn, $sql);
        $username;
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $username=$row["username"];
          }
          
        $outgoing_id = $username;
        $incoming_id = $_POST['incoming_id'];
        $message=$_POST['msg'];
        echo $message;
        if(!empty($message)){
            $sql= "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg) VALUES ('{$incoming_id}', '{$outgoing_id}', '{$message}')";
            $result = mysqli_query($conn,$sql);
        }
      }

?>
