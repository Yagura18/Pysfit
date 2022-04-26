<?php
include_once "config.php";
include_once "session.php";

$username=$_SESSION['username'];
 $sql="SELECT * FROM journal WHERE username='$username' " ;
$query = mysqli_query($conn, $sql);
$output="";
if(mysqli_num_rows($query)){
    while($row = mysqli_fetch_assoc($query)){
      $output .= '<div class="chat outgoing">
                  <div class="details">
                      <p>'. $row['txt'] .'</p>
                  </div>
                  </div>';
      }
}else{
    $output .= '<div class="text">No notes are available. Once you create a note they will appear here.</div>';
}
echo $output;
 ?>
