<?php
   include('..\session\loginsession.php');

   if(isset($_SESSION["username"]))
   {
     //echo $_SESSION["userid"];

    
     header("location: adminhome.php");
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="../css/login.css">
</head>
<body  >


  <form action="" method="POST">

   <input id="id" type="text" placeholder="username" name="username"> <?php echo $usernameerror; ?>
   <br>

   <input type="password" placeholder="password" name="password"> <?php echo $passworderror; ?>
   <br>

   <input id="button" type="submit" name="submit" value="LogIn" >

   

  </form>

  <?php

   echo $error;

  ?>



  
  
</body>
</html>