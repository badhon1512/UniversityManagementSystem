<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php

   include "../session/loginsession.php";
   $password=$error="";
   $valid=true;

   if(!empty($_POST["changepassword"]))
   {
     $password=$_POST["newpass"];
   
     if($_POST["newpass"]=="")
     {
       $valid=false;
      $error="please enter a password";
     }
     
    if($_POST["newpass"]!=$_POST["cnewpass"])
    {
      $valid=false;
        $error="password doesn't match";

    }

    if($valid)
    {
      $sql="update user set userpassword='$password' where userid='$_SESSION[userid]'";
      $connect=new db();
       $conobj=$connect->OpenCon();
       
       //echo "$sql";
       $result=$connect->UpdateQuery($conobj,$sql);

       echo "password change successfull";
    }
    
   }
   
   

?>


<h1 style="text-align: center;">Password change</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label  for="">New password</label>
<label  for="">:</label>
<input type="password" name="newpass" >
<br>
<br>

<label  for="">Confirm password</label>
<label  for="">:</label>
<input type="password" name="cnewpass" >
<br>
<br>
<?php echo $error;
?>
<br>

<input type="submit" name="changepassword" value="change password" >
<input type="reset" name="reset" value="reset" >

</form>


  
</body>
</html>