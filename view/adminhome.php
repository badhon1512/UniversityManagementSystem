<?php
 include 'header.php';
if(empty($_SESSION["username"]))
{
  header("location: login.php");
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>
<body>







<h1 >Admin Home page</h1>

<div class='row'>
  

<div class='col-1'>
 <ul > 
   

 <li><a href="postnotice.php" target="iframe">Post Notice</a></li>
 <br>

 <li ><a href="studentinfo.php" target="iframe" >Student Info</a></li>
 <br>

   <li ><a href="facultyinfo.php" target="iframe" >Faculty Info</a></li>
   <br>

   <li ><a href="staffinfo.php"  target="iframe">Employee Info</a></li>
   <li ><a href="admininfo.php" target="iframe">Admin Info</a></li>
   <li ><a href="addfaculty.php"  target="iframe">Add Faculty</a></li>
   <li ><a href="addstudent.php" target="iframe" >Add Student</a></li>

   <li ><a href="addemployee.php" target="iframe">Add Employee</a></li>

   <li ><a href="addadmin.php" target="iframe">Add Admin</a></li>
</ul>

  
</div>

<div class="col-2">
<iframe src="../image/home.jpg" name="iframe" height="1000px" width="100%" title="Iframe Example"></iframe>


</div>
   
   </div>

  

  









  
</body>
</html>