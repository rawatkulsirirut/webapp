<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ของดีหายาก">
    <meta name="author" content="RJ">

    <title>เครื่องยาจีน</title>
    <link href=" public/img/icon/1.ico" rel="icon" type="image/x-icon">
    <?php 
    include('include/song.php');
    require_once "view/css-js/css_js.php";
    ?>

</head>

<body style="background-image: url('public/img/bg/body.jpg');">

 <div style="text-align: center;"><h1>หลัวไห่เหยา ยาจีน</h1></div>
 <div  class="f1">

     <form name="form" action="./function/login.inc.php" method="post">
        <div class="imgcontainer">
          <img src="public/img/login/1.jpg" alt="Avatar" class="avatar">
        </div>

     <div class="container" >
     <div class="f3">
       <label><b>Username</b></label>
         <input  type="text" placeholder="Enter Username" name="username" required>
       <label><b>Password</b></label>
          <input  type="password" placeholder="Enter Password" name="passwd" required>
     </div>   
        <button class="f2" type="submit" name="login" >Login</button>
      
    </form>
  </div>
</div>


</body>

</html>
 

