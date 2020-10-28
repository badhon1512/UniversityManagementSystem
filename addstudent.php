<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



<?php include "header.php" ;?>

<h1 style="text-align: center;">Add New Students</h1>

<?php



$fname =$lname= $email = $gender = $username = $password =$cpassword=$date= "";
$Notfname=$notlname=$notemail=$notGender=$notusername=$notpass=$notcpass=$notdate="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $username=test_input(($_POST["username"]));
  $password=test_input(($_POST["pass"]));
  $cpassword=test_input(($_POST["cpass"]));
  $date=test_input(($_POST["dob"]));

  
  




  if(empty($fname) || !preg_match("/^[a-zA-Z-' ]*$/",$fname))
  {
    $Notfname="please enter your first name";
  }
  if(empty($lname) || !preg_match("/^[a-zA-Z-' ]*$/",$lname))
  {
    $notlname="please enter your last name";
  }
  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $notemail="please enter your email";
  }
  if(empty($username)|| !preg_match("/^[(0-9)+a-zA-Z-' ]*$/",$username))
  {
    $notusername="please enter user name";
  }

  if(empty($password))
  {
    $notpass="please enter password";
  }
  if(empty($cpassword))
  {
    $notcpass="please  enter confirm password";
  }

  if(empty($date))
  {
    $notdate="please enter dtae of birth";
  }

  


  
  
}

function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


  


  <form enctype="multipart/formdata" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <fieldset>
  <legend styel="align:left"><b> Registration Form</b></legend>



    <?php include "addcommon.php";?>
    
    <br>
    <hr>
   

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