<?php  
 if (isset($_SESSION["admin"])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ของดีหายาก">
    <meta name="author" content="RJ">
    <link href=" ../public/img/icon/1.ico" rel="icon" type="image/x-icon">
     <title>เครื่องยาจีน</title>

        <?php
          include('../include/headder.php');
          include('../include/song.php');
          include('../connectDB/db_user.inc.php');
          require_once "../view/css-js/css_js_2.php";
        ?>
 


           
</head>
<body style="background-image: url('../public/img/bg/body.jpg');">
 
   <br/> <br/>  
   <div style="text-align: center; padding-top: 50px;"><h1><font color="black">จัดการผู้ใช้</font></h1></div>
   <br/> <br/> 
  
<?php

  $user = get_user($conn,$members);
  $name_column_member = array("id","name","surname","username","passwd","type");
?>

<div style="margin-left:  1145px; padding-bottom: 20px;">
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">ADD USER</button>

</div>

   <!-- Modal content  เพิ่ม ยูเซอร์-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;">เพิ่มผู้ใช้</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="../controll/crud.inc.php">
           <label><b>Name: </b></label> </br>  <input  type="text" placeholder="Enter Name" name="ADDname" required> </br>
           <label><b>Surnmae: </b></label>  </br> <input  type="text" placeholder="Enter Surnmae" name="ADDsurname" required> </br>
           <label><b>Username: </b></label> </br>  <input  type="text" placeholder="Enter Username" name="ADDusername" required> </br>
           <label><b>Password: </b></label>  </br> <input  type="text" placeholder="Enter Password" name="ADDpasswd" required> </br>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success" >เพิ่ม</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
        </div>

        </form>
      </div>
      
    </div>
  </div>
  <!-- Modal content  เพิ่ม ยูเซอร์-->






<div style="max-width: 1000px; margin: auto; ">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="99%">
         <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>TYPE</th>
                <th style="text-align: center">EDIT</th>
                <th style="text-align: center">DELETE</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>TYPE</th>
                <th style="text-align: center">EDIT</th>
                <th style="text-align: center">DELETE</th>
            </tr>
        </tfoot>
        <tbody>
        <?php 
          $i=0;
          $order=1;
        while ( $i< sizeof($user)) {
           if($user[$i]["type"] != "admin") {
        
       ?>
            <tr>
                <th> <?php echo $order++; ?> </th>
                <th> <?php echo $user[$i]["name"]; ?></th>
                <th> <?php echo $user[$i]["surname"]; ?></th>
                <th> <?php echo $user[$i]["username"]; ?></th>
                <th> <?php echo $user[$i]["passwd"]; ?></th>
                <th> <?php echo $user[$i]["type"]; ?></th>
              <?php echo "<th style='text-align: center'> <a  class='btn btn-warning'  href='../controll/crud.inc.php?id_edit=". $user[$i]["id"]."'> EDIT</a></th>" ;  ?>  
              <?php echo "<th style='text-align: center'> <a  class='btn btn-danger'  href='../controll/crud.inc.php?id_delete=". $user[$i]["id"]."'> DELETE</a></th>" ;  ?>
               <!-- <th style="text-align: center"> <button type="button" class="btn btn-danger" id="DELETE" data-toggle="modal" data-target="#DELETE"> DELETE</button></th> -->
            </tr>

 <?php } $i++;  }?>


        </tbody>
    </table>
</div>

</br></br></br></br></br></br>

<?php
include('../include/footer.php');

?>

       <script type="text/javascript">
         $(document).ready(function() {
        $('#example').DataTable();
         } );
        </script>






</body>
</html>

<?php  

}
 else
 {
  echo("<script> alert('อย่าดูเรานะ'); window.location='../../home.php';</script>"); 
 }

?>
