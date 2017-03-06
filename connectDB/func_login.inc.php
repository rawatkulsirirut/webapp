<?php
 function login($conn,$username,$passwd,$type)
 {
  
    
try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM members"); 
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
     return ($result);

    }
  
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    header("location:../home.php");
 
    }
     $conn = null;
   }
     ?>