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
  <title>Document</title>
</head>
<body>







<h1 style="text-align:center;">Admin Home page</h1>
  

 <ul style="margin-top:70px; list-style-type:none;  text-align:center;height:100%; width:200px; margin-left:450px;margin-right:400px"> 
   

 <li style="margin-top:10px;"><a href="postnotice.php"  style="color:white;background-color:#2196f3; padding:10px 90px 10px 10px; margin-top:50px; text-decoration: none; text-align:left;">Post Notice</a></li>

 <li style="margin-top:30px;"><a href="studentinfo.php"  style="color:white;background-color:#2196f3; padding:10px 90px 10px 5px; margin-top:50px; text-decoration: none; text-align:left;">Student Info</a></li>

   <li style="margin-top:30px;"><a href="facultyinfo.php"  style="color:white;background-color:#2196f3; padding:10px 90px 10px 5px; margin-top:50px; text-decoration: none; text-align:left;">Faculty Info</a></li>

   <li style="margin-top:30px;"><a href="staffinfo.php"  style="color:white;background-color:#2196f3; padding:10px 80px 10px 0px; margin-top:50px; text-decoration: none; text-align:left;">Employee Info</a></li>
   <li style="margin-top:30px;"><a href=""  style="color:white;background-color:#2196f3; padding:10px 90px 10px 10px; margin-top:50px; text-decoration: none; text-align:left;">Admin Info</a></li>
   <li style="margin-top:30px;"><a href="addfaculty.php"  style="color:white;background-color:#2196f3; padding:10px 90px 10px 5px; margin-top:50px; text-decoration: none; text-align:left;">Add Faculty</a></li>
   <li style="margin-top:30px;"><a href="addstudent.php"  style="color:white;background-color:#2196f3; padding:10px 90px 10px 5px; margin-top:50px; text-decoration: none; text-align:left;">Add Student</a></li>

   <li style="margin-top:30px;"><a href="addemployee.php"  style="color:white;background-color:#2196f3; padding:10px 80px 10px 0px; margin-top:50px; text-decoration: none; text-align:left;">Add Employee</a></li>

   <li style="margin-top:30px;"><a href="addadmin.php"  style="color:white;background-color:#2196f3; padding:10px 90px 10px 10px; margin-top:50px; text-decoration: none; text-align:left;">Add Admin</a></li>

  

   <footer>
   </ul>
 <p>kasD</p>
 <p>kasD</p>
 <p>kasD</p>
 <var><p>kasD</p></var>
   </footer>
 


  









  
</body>
</html>