<?php
   session_start();
 if (isset($_SESSION["delete"])) { 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ของดีหายาก">
    <meta name="author" content="RJ">

    <title>เครื่องยาจีน</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="../../public/img/icon/1.ico" rel="icon" type="image/x-icon">
    <?php 
    include('../../include/song.php');
    require_once "../../view/css-js/css_js.php";
    ?>

</head>

<body style="background-image: url('../../public/img/bg/body.jpg');">

 <div style="text-align: center;"><h1>ลบผู้ใช้</h1></div>
 </br></br>
 <div  class="f1" style="text-align: center">
  <form method="post" action="../../controll/crud.inc.php">
  	 <button name ="delete"  type="submit" class="btn btn-danger"> ลบ</button>
     <a type="button" class="btn btn-primary" href="../../controll/admin_only.php">ยกเลิก</a>
  </form>
  </div>
</div>


</body>

</html>
 <?php
}
else
{ echo("<script> alert('ไม่นะ'); window.location='../../home.php';</script>"); }

 ?>

