<?php 
  session_start();
  if ( $_SESSION["login"]!="ไก่จิกเด็กตกบนปากโอ่ง") {
      echo("<script> alert('please login'); window.location='../../home.php';</script>"); 
   }

spl_autoload_register(function ($class_name) {
    require_once "../../class/" . $class_name . ".class.php";
});

 include('../../function/helper_func.inc.php');
 require "../../connectDB/headcon/headconnect.php";
 global $conn;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ของดีหายาก">
    <meta name="author" content="RJ">
    <link href="../../public/img/icon/1.ico" rel="icon" type="image/x-icon">
     <title>เครื่องยาจีน</title>
    
   
<?php
 include('../../include/header.php');
 include('../../include/song.php');
 require_once "../../view/css-js/css_js_1.php";
    
 ?>
</head>
<body style="background-image: url('../../public/img/bg/body.jpg');">
 
  


   <br/> <br/>  
   <div style="text-align: center; padding-top: 50px;"><h1><font color="black">รายการสินค้าที่ท่านเลือก</font></h1></div>
   <br/> <br/> 



<div style="width: 500px; margin: auto;">

<?php
      
        $cart = new Cart($conn, $_SESSION['products'], $_REQUEST['costchimed']);
   	    $units = $cart->getUnits();
        //var_dump($units);
        $products= $_SESSION['products'];   
        
        $thead = array("ลำดับ","รหัส", "สมุนไพร", "ราคาต่อชิ้น", "จำนวน", "ราคา");
        // $tbody = array("product_code", "product_name", "price", "piece", "sumprice");

        table($conn,$products,$units,$thead);


?>






</div>

 <br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/>


<?php
include('../../include/footer.php');
show_source("calculate_cart.php")

 ?>
</body>
</html>

