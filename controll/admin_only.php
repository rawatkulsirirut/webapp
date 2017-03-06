<?php 
  session_start();

 if (isset($_SESSION["admin"]))  {

    require "../connectDB/headcon/headconnect.php";
    require "../connectDB/nameDB/name_table.php";
    global $conn;
    global $members;
    require "../view/page/manage_user.inc.php";

  }
  else
  {
    echo("<script> alert('please login'); window.location='../home.php';</script>"); 
  
  }



?>
