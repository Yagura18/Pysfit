<?php

        include_once "config.php";
        include_once "session.php";
        $currentemail=$_SESSION["username"];
        $sql = "SELECT * FROM users where  email='$currentemail'";
        $result = mysqli_query($conn, $sql);
        $outgoing_id;
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $outgoing_id=$row["username"];
          }
        }

        $incoming_id= $_POST['incoming_id'];
        $output = "";
         $sql="SELECT * FROM messages LEFT JOIN users ON users.username=messages.outgoing_msg_id WHERE incoming_msg_id='$incoming_id' AND
         outgoing_msg_id='$outgoing_id' OR outgoing_msg_id = '$incoming_id' AND incoming_msg_id = '$outgoing_id' ORDER BY msg_id;" ;
                  $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query)){
            while($row = mysqli_fetch_assoc($query)){
              if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">

                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
              }
        }else{
          $currentemail=$_SESSION["username"];
          $sql = "SELECT * FROM users where  email='$currentemail'";
          $result = mysqli_query($conn, $sql);
          $stat;
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $stat=$row["status"];
            }
          }
          if($stat==='null')
          {
            $output .= '<div class="text">Psyfer has left the chat!</div>';
          }
          else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
          }
        }
        echo $output;



?>
