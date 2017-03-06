<?php
   session_start();
    require_once "../connectDB/db_user.inc.php";
    require "../connectDB/headcon/headconnect.php";
    require "../connectDB/nameDB/name_table.php";
    global $conn;
    global $members;

  if (isset($_POST["ADDname"])) {   //เรียกโมเดลเพิ่มผู้ใช้

    $ADDname =  $_POST["ADDname"];
    $ADDsurname = $_POST["ADDsurname"];
    $ADDusername = $_POST["ADDusername"];
    $ADDpasswd = $_POST["ADDpasswd"];

    $insert = insert( $members,$conn,$ADDname, $ADDsurname,$ADDusername,$ADDpasswd);

   if ($insert ==true) {
     header("location:../controll/admin_only.php");
   }
   else  echo("<script> alert('บันทึกไม่สำเร็จ'); window.location='../controll/admin_only.php';</script>"); 

   }


 
  if (isset($_GET["id_delete"])) {  //รับไอดีและส่งต่อไปหน้าลบ
  	$_SESSION["delete"] = $_GET["id_delete"];
    header("location:../view/crud/delete.inc.php");
  }
 


  if (isset($_POST["delete"])) { //เรียกโมเดลลบทิ้ง
    $id_delete =$_SESSION["delete"];
    $deleteuser = delete($id_delete,$conn, $members);

    if ($deleteuser ==true) {
     header("location:../controll/admin_only.php");
   }
   else  echo("<script> alert('บันทึกไม่สำเร็จ'); window.location='../controll/admin_only.php';</script>"); 
  }
 


  if (isset($_GET["id_edit"])) {  //รับไอดีและส่งต่อไปหน้าแก้ไข
  	$_SESSION["edit"] = $_GET["id_edit"];
     header("location:../view/crud/edit.inc.php");
  }
 


  if (isset($_POST["edit"])) { //เรียกโมเดลแก้ไข
   $id_edit=    $_SESSION["edit"];
   $edit_name = $_POST["name"];
   $edit_surmame = $_POST["surmame"];
   $edit_username = $_POST["username"];
   $edit_passwd = $_POST["passwd"];


   $editeuser = editeuser($id_edit,$edit_name, $edit_surmame,$edit_username,$edit_passwd , $conn, $members);

    if ($editeuser ==true) {
     header("location:../controll/admin_only.php");
     }
    else  echo("<script> alert('บันทึกไม่สำเร็จ'); window.location='../controll/admin_only.php';</script>"); 
  }
 




?>