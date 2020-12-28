<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  
<?php

 
 $salary=$name= $email = $gender = $username = $password =$cpassword=$date= "";
$notname=$notlname=$notemail=$notGender=$notusername=$notpass=$notcpass=$notdate=$passmatch=$existusername="";

$valid=true;

 $salary=$depertment="";
 $notsalary=$notdepertment="";

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   
   
  
   $salary=$_POST["salary"];
   

   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $gender = test_input($_POST["gender"]);
   $username=test_input(($_POST["username"]));
   $password=test_input(($_POST["pass"]));
   $cpassword=test_input(($_POST["cpass"]));
   $date=test_input(($_POST["dob"]));
   
 
    if(empty($name) || !preg_match("/^[a-zA-Z-' ]*$/",$name))
   {
     $notname="please enter your name";
     $valid=false;
   }
   
   if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
   {
     $notemail="please enter your email";
     $valid=false;
   }
   if(empty($username)|| !preg_match("/^[(0-9)+a-zA-Z-' ]*$/",$username))
   {
     $notusername="please enter user name";
     $valid=false;
   }
 
   if(empty($password))
   {
     $notpass="please enter password";
     $valid=false;
   }
   if(empty($cpassword))
   {
     $notcpass="please  enter confirm password";
     $valid=false;
   }
 
   if(empty($date))
   {
     $notdate="please enter date of birth";
     $valid=false;
   }
   if(empty($salary))
   {
     $notsalary="please enter the salary";
     $valid=false;
   }
   


   if($password!=$cpassword)
   {
     $valid=false;
     $passmatch="Please match the password";
   }
   include "../dbControler/db.php";

   if($valid)
{

  $sql3="SELECT * FROM user where userid='$username'";


     
     $connect=new db();
     $conobj=$connect->OpenCon();
     $c=$connect->SelectQuery($conobj,$sql3);
     $connect->CloseCon($conobj);
     if($c->num_rows>0)
     {
      $existusername="This user name is already exist";
      $valid=false;
     }
     

}


   if($valid)
   {
    
    

    $sql="INSERT INTO  staff
  VALUES ('$username','$name', '$email','$gender','$password','$date','$salary','active','pic')";


$sql2="INSERT INTO  user VALUES('$username','$name','staff','$password','active')";

     
     $connect=new db();
     $conobj=$connect->OpenCon();
     $connect->InsertQuery($conobj,$sql2);
     $connect->InsertQuery($conobj,$sql);
     $connect->CloseCon($conobj);


   }
   else 
   {
     echo "not valid";
   }
   
 
 
   
   
 }
 
 
 function test_input($data) {
   
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
 
 
   
   
 

  
  
 
 
 ?>





<h1 >Add New Employee</h1>


  <form enctype="multipart/formdata" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <fieldset>
  <legend ><b> Registration Form</b></legend>



  <label  for=""> Name  </label>

<label  for=""> :</label>
<input class="text"  type="text" name="name" id="name" placeholder="name" > <?php echo $notname;  ?>

<!--<hr style="margin-left:400px; margin-:400px;">-->
<hr>


<label  for="">Email</label>


<label  for=""> :</label>
<input class="text"  type="text" name="email" id="email"
  placeholder="badhon1512@gmail.com"> <?php echo $notemail;  ?>

<hr>


<label   font-size:20px" for="">User Id </label>
<label  font-size:20px" for=""> :</label>
<input class="text"  type="text" name="username" id="cemail" placeholder="badhon1512" > <?php echo $notusername;  ?>

<br>
<?php echo $existusername;  ?>

<hr>



<label for="">Password </label>

<label  for=""> :</label>

<input class="text"  type="password" name="pass" id="pass" placeholder="*****" > <?php echo $notpass;  ?>

<hr>


<label  for="">Confirm Password  </label>
<label  for=""> :</label>
<input  type="password" name="cpass" id="cpass" placeholder="*******" > <?php echo $notcpass;  ?>
<br>
<hr>



<fieldset >
<legend   >Gender</legend>

<input  value="male"  type="radio" name="gender" id="male" >

<label for="">Male</label>

<input value="Female"  type="radio" name="gender" id="female" >

<label for="">Female</label>


<input  type="radio" name="gender" id="other" checked>

<label for="">Other</label> <?php echo $notGender;  ?>
</fieldset>

<br>
<hr>   
<fieldset >
<legend >Date of Birth</legend>

<input  type="date" name="dob" id="date" > <?php echo $notdate;  ?>

</fieldset>

    <br>
    <hr>

  




    <label for="">Salary</label>

    <label  font-size:20px" for=""> :</label>
    
    <input class="text"  type="number" name="salary" id="salary" placeholder="2000" > <?php echo $notsalary;  ?>
    <br>
    <br>
   

    <input  type="submit" name="submit" id="">
    <input  type="reset" name="reset" id="">
    


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