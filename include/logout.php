<?php
    session_start();	
    session_unset();
	session_destroy();
      if (ini_get("session.use_cookies")) 
        {
       setcookie(session_name(),'',time() - 3600,"/");
         }
     echo "Session deleted";
     header('location:../home.php');
?>

