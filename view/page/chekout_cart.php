<?php 
   session_start();
   if ( $_SESSION["login"]!="ไก่จิกเด็กตกบนปากโอ่ง") {
      echo("<script> alert('please login'); window.location='../../home.php';</script>"); 
   }
 
 
spl_autoload_register(function ($class_name) {
    require_once "../../class/" . $class_name . ".class.php";
});

 require "../../connectDB/headcon/headconnect.php";
 global $conn;
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="ร้านนี้ขายยาจีน">
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
   <div style="text-align: center; padding-top: 50px;"><h1><font color="black">ยาจีน</font></h1></div>
   <br/> 

 
<div style="width: 500px; margin: auto;">

<form method="post" action="../page/calculate_cart.php">
<table cellspacing="0" width="60%">
  <thead>
	<tr>
		<th align="center" style="text-align: center;" >รหัส</th>
		<th align="center" style="text-align: center;">สมุนไพร</th>
		<th align="center" style="text-align: center;">ราคา</th>
		<th style="text-align: center;" width="150">จำนวน</th>
	</tr>
  </thead>
	<?php 
    
      $lists = new ProductList($conn);
      $products = $lists->getProducts();
      $data = current($products);
      $_SESSION['products'] = $products;
     //var_dump($products);     
    while($data) 
     {

       //reset($data);
     ?>
		<tbody>
			<tr> 
				   <td align="center" style="text-align: center;"> <?php  echo $data->getProductCode() ?>  </td>
			     <td align="center" style="text-align: center;"> <?php  echo $data->getProductName() ?>  </td>
			  	 <td align="center" style="text-align: right; padding-right: 4px;"><?php  echo $data->getPrice() ?> </td>
				   <td style="text-align: right;"><input type="number" name="costchimed[]" /></td>
			</tr>
		</tbody>	

			 <?php 
		$data = next($products);	
  } 
 		?> 
</table>

<br/>

<div align="center">
	<button class="ff" type="submit" name="submit"  >ขั้นต่อไป</button>
</div>

</form>
</div>

 <br/> <br/> <br/>  <br/> <br/> <br/>  <br/> <br/> <br/>  <br/> <br/> 



<?php
include('../../include/footer.php');
show_source("chekout_cart.php");

 ?>

</body>
</html>


