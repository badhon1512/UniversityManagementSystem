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


<h1 style="text-align: center;">Add New Admin</h1>


  <form enctype="multipart/formdata" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <fieldset>
  <legend styel="align:left"><b> Registration Form</b></legend>



    <?php include "addcommon.php";?>
    
    <br>
    <hr>

  
<label style="margin-left:100px;  font-size:20px" for="">Picture </label>
    <label style="margin-left:140px; color:maroon; font-size:20px" for=""> :</label>
    <input type="file">


    <hr>



    <label style="margin-left:100px;  font-size:20px" for="">Salary</label>

    <label style="margin-left:150px; color:maroon; font-size:20px" for=""> :</label>
    
    <input style=" height:20px; width:200px" type="number" name="pass" id="pass" placeholder="2000" > <?php echo $notpass;  ?>
    <br>
    <br>
   

    <input style="margin-left:100px; width:210px;" type="submit" name="submit" id="">
    <input style=" width:220px;" type="reset" name="reset" id="">
    


</fieldset>



  </form>


  







  <!--<table style="width:100%; margin:50px; text-align:center">

<form action="">
<tr >
<td style="color:marron; text-align:right;">First name : </td>
<td style="text-align:left"><input type="text" id="firstname" ></td>
</tr>



<tr >
<td style="color:marron; text-align:right;">last name : </td>
<td style="text-align:left"><input type="text" id="lastname" ></td>
</tr>


</form>

</table>-->







</body>
</html>