<?php

function get_user($conn,$members){ //แสดงคนทั้งหมด
try {

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM $members"); 
    $stmt->execute();
    $result =$stmt->fetchAll(PDO::FETCH_ASSOC);

    }
  
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

 
   return($result);

  }

function insert($members,$conn,$ADDname,$ADDsurname,$ADDusername,$ADDpasswd){ //เพิ่มคนใช้ๆๆ

try {

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO $members (name, surname, username,passwd,type)
    VALUES ('$ADDname', '$ADDsurname', '$ADDusername','$ADDpasswd','user')";
    // use exec() because no results are returned
    $conn->exec($sql);

    }
  
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

 
  return true;

  }

function delete($id_delete,$conn, $members){ //ลบๆๆ

try {

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM $members WHERE id= $id_delete";

    // use exec() because no results are returned
    $conn->exec($sql);
  

    }
  
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

 
  return true;

  }

function show_edit($conn,$members, $id_edit){ //แสดงคนตามไอดีที่ขอมา
try {

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM $members WHERE id = $id_edit"); 
    $stmt->execute();
    $result =$stmt->fetchAll(PDO::FETCH_ASSOC);

    }
  
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

 
   return($result);

  }

function editeuser($id_edit,$edit_name, $edit_surmame,$edit_username,$edit_passwd , $conn, $members){ //แก้ไขคนตามค่าที่ส่งมา
try {

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE $members SET name='$edit_name',surname ='$edit_surmame', username = '$edit_username',passwd = '$edit_passwd' WHERE id=$id_edit";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
    }
  
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

 
   return true;

  }








?>

