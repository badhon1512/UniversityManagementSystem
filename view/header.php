<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../adminhome.css">
</head>
<body>
<?php
session_start();

?>
<div class="sticky">
  


<ul >


<li><a href="../session/logoutsession.php"> <h1>Logout</h1></a></li>


<li><a href="settings.php"> <h1 >Settings</h1></a></li>
<li><a href="showadmininfo.php" > <h1 ><?php echo $_SESSION["username"] ;?></h1></a></li>
<li class="logo"><a href="adminhome.php"  ><img src="../image/aiub_portal_logo.png" alt="Aiub logo"></a></li>







</ul>

</div>




<?php 

  



?>
  
</body>
</html>