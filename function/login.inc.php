<?php
session_start();
 $i =2;
 $j=3;
 $j =0;

include('../connectDB/headcon/headconnect.php');
include('../connectDB/func_login.inc.php');

$username = $_POST['username'];
$passwd  = $_POST['passwd'];
$type = "admin";

$result= login($conn,$username,$passwd,$type);

foreach ($result as $key)
     {
        if ( $username ==  $key['username'] && $passwd   ==   $key['passwd'] )
         { 
            $i=1; $j=1;
            if($type == $key['type'] ){ $k=1;}
         }           
     }
      
 if ($i== $j)
  {
    $check = true;
  }
 else
  {
    $check =false;
  }

if ($check==true)
  {
     if($k==1){
    
        $_SESSION["admin"]="ฟหกด";
         header("location:../controll/admin_only.php");
     }
     else{

         $_SESSION["login"]="ไก่จิกเด็กตกบนปากโอ่ง";
         header("location:../view/page/chekout_cart.php");
     }
  
  }
 else
  {
   echo("<script> alert('user หรือ password ไม่ถูกต้อง'); window.location='../home.php';</script>");
  }





 
?>
