<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php

   include "session/loginsession.php";
   include "header.php";
   

?>


<h1 style="text-align: center;">Password change</h1>

<form action=""   style="margin-top:100px;">
<label style="margin-left:400px;" for="">Current password</label>
<label style="margin-left:20px;" for="">:</label>
<input type="password" name="pass" style="width:300px">
<br>
<br>

<label style="margin-left:400px;" for="">New password</label>
<label style="margin-left:45px;" for="">:</label>
<input type="password" name="newpass" style="width:300px">
<br>
<br>

<label style="margin-left:400px;" for="">Confirm password</label>
<label style="margin-left:20px;" for="">:</label>
<input type="password" name="cnewpass" style="width:300px">
<br>
<br>



<input type="submit" name="submit" value="change password" style="margin-left:450px;margin-top:20px; width:150px;">
<input type="reset" name="reset" value="reset" style="margin-left:10px;margin-top:20px; width:150px;">

</form>


  
</body>
</html>