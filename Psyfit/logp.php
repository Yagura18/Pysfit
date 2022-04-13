<?php

function redirect($url){
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

if(isset($_POST['submit']))
{
  $user=$_POST['email'];
  $pass=$_POST['password'];
	$server="localhost";
	$username="root";
	$password="";
	$dbname="psyfit";

		$conn=mysqli_connect($server,$username,$password,$dbname);
		if($conn->connect_error)
		{
			die("Connection failed: ".mysqli_connect_error());
		}
        $sql = "SELECT * FROM users WHERE email='$user'";
        $result= mysqli_query($conn,$sql);

        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_array($result))
            {
                if($row['password'] === $pass)
                {
                    session_start();
                    $_SESSION['username'] = $user;
                    $_SESSION['user_status'] = "logged_in";
                    redirect("./home.php");
                    echo '<script type="text/JavaScript">
                    alert("Login Succefully");
                    </script>';

                }
                else
                {
                    echo '<script type="text/JavaScript">
                    alert("Invalid Password");
                    window.location.replace("./login.php");
                    </script>';
                }
            }
        }
        else{
            echo '<script type="text/JavaScript">
            alert("Please Sign Up Befor Login");
            window.location.replace("./registration.php");
            </script>';
            }

}

	?>
