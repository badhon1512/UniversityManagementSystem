<?php
   include('session\loginsession.php');

   if(isset($_SESSION["username"]))
   {
    
     header("location: adminhome.php");
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="background-image:url('image/aiubHome.jpg');background-position: center; background-repeat: no-repeat;background-attachment: fixed;" >


  <form action="" method="POST">

   <input type="text" style="margin-top:200px;margin-left: 400px;height:35px;width:350px; font-size:20px;" placeholder="username" name="username"> <?php echo $usernameerror; ?>
   <br>

   <input type="password" style="margin-top:20px;margin-left:400px;height:35px;width:350px ; font-size:20px"placeholder="password" name="password"> <?php echo $passworderror; ?>
   <br>

   <input type="submit" name="submit" value="LogIn" style="margin-left: 400px; margin-top:20px; width:360px;height:45px; background-color:#497FAF;font-size:20px;">

   


  </form>


  
  
</body>
</html>