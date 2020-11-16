<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
session_start();

?>

<ul style="list-style-type:none;  overflow: auto; margin:0; padding: 0; border: 1px solid #2196f3;">

<li><a href="adminhome.php"  style="float:left"><img src="../image/aiub_portal_logo.png" alt="Aiub logo"></a></li>
<li><a href="../session/logoutsession.php"> <h1 style="float:right; padding:10px; background-color:#2196f3; margin:7px 20px;">Logout</h1></a></li>


<li><a href="settings.php"> <h1 style="float:right; padding:10px; margin:7px 20px;">Settings</h1></a></li>
<li><a href="showadmininfo.php"> <h1 style="float:right; margin:7px 20px;"><?php echo $_SESSION["username"] ;?></h1></a></li>


</ul>

<?php 

  



?>
  
</body>
</html>