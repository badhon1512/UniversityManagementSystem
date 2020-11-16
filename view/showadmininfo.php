<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="font-size: 20px;">



  <?php


include "../dbControler/db.php";
  include "header.php";
  //include "DbControler/db.php";

  $name = "";
  $connection = new db();
  $conobj=$connection->OpenCon();
   $sql="SELECT * from faculty where userid='$_SESSION[userid]'";
  $userQuery=$connection->SelectQuery($conobj,$sql);
  $row=$userQuery->fetch_assoc();

  ?>


    

  <label style="margin-left:100px;  font-size:20px" for=""> name </label>

  <label style="margin-left:150px;  font-size:20px" for=""> :</label>

<?php echo $row["username"]; ?>


  <!--<hr style="margin-left:400px; margin-:400px;">-->
  <hr>


  <label style="margin-left:100px;  font-size:20px" for="">Email</label>


  <label style="margin-left:140px; font-size:20px" for=""> :</label>
  <?php echo $row["email"]; ?>

  <hr>


  <label style="margin-left:100px;  font-size:20px" for="">User Id </label>
  <label style="margin-left:130px; color:maroon; font-size:20px" for=""> :</label>
  <?php echo $row["userid"];; ?>
  <hr>
  <label style="margin-left:100px;  font-size:20px" for="">Gender </label>
  <label style="margin-left:130px; color:maroon; font-size:20px" for=""> :</label>
  <?php $row["gender"]; ?>


  <hr>
  <label style="margin-left:100px;  font-size:20px" for="">Dtae of birth </label>
  <label style="margin-left:85px; color:maroon; font-size:20px" for=""> :</label>
  <?php echo $row["dateofbirth"]; ?>


  <hr>

  <label style="margin-left:100px;  font-size:20px" for="">salary </label>
  <label style="margin-left:140px; color:maroon; font-size:20px" for=""> :</label>
  <?php echo $row["salary"]; ?>


  <hr>




















</body>

</html>