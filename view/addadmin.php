<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
function check()
{
  console.log("call");
  var flag=true;
var name=id=password=salary=dob=cpassword=address=email=telephone=superpower="";

  name=document.getElementById("name").value;
  
  email=document.getElementById("email").value;
  
  password=document.getElementById("pass").value;
  cpassword=document.getElementById("cpass").value;
  salary=document.getElementById("salary").value;
  dob=document.getElementById("dob").value;
  
  
  var letters = /^[A-Za-z' ']+$/;
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var numbers = /^[0-9]+$/;
  if(!name.match(letters))
  {
    
    flag=false;
  
    document.getElementById("nameerror").innerHTML="Please Enter valid name";
  }

  if(!email.match(mailformat))
  {
    
    flag=false;
    document.getElementById("emailerror").innerHTML="Please enter valid email";
  }
  if(password.length<6)
  {
    flag=false;
    document.getElementById("passerror").innerHTML="Password lenght must be at least 6 charecter";
  }
  if(password!=cpassword)
  {
    flag=false;
    document.getElementById("cpasserror").innerHTML="password doesn't match";
  }
  if(salary=="")
  {
    flag=false;
    document.getElementById("salaryerror").innerHTML="password enter salary";
  }
  if(dob=="")
  {
    flag=false;
    document.getElementById("doberror").innerHTML="password enter date of birth";
  }
 

  if(flag===false)
  {
  
    
    return false;
  }
  else
  {
    return true;
  }
  
 
}


</script>

</head>
<body>
  
<?php
session_start();
$name= $email = $gender = $username = $password =$cpassword=$date= "";
$notname=$notlname=$notemail=$notGender=$notusername=$notpass=$notcpass=$notdate="";
$valid=true;


$existusername="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username=$_POST["username"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $password=$_POST["pass"];
  $date=$_POST["dob"];
  $salary=$_POST["salary"];

  
  include "../dbControler/db.php";

   if($valid){

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

       if($valid)
   {


     
    

  

    $sql="INSERT INTO  admin
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
     echo "Invalid Information";
   }


  
  




  
  
}
}


 ?>


<h1 >Add New Admin</h1>


<form name="myForm" action="" onsubmit="return check()"
method="post">
  <fieldset>
  <legend ><b> Registration Form</b></legend>



  <label  for=""> Name  </label>

<label  for=""> :</label>
<input type="text" name="name" id="name" placeholder="name" > 
<p id="nameerror"></p>

<!--<hr style="margin-left:400px; margin-:400px;">-->
<hr>


<label  for="">Email</label>


<label  for=""> :</label>
<input  type="text" name="email" id="email"
  placeholder="badhon1512@gmail.com"> <p id="emailerror"></p>

<hr>


<label  for="">User Id </label>
<label  for=""> :</label>
<input  type="text" name="username" id="uid" placeholder="badhon1512" > 
<?php 
echo $existusername;
?>

<hr>



<label for="">Password </label>

<label  for=""> :</label>

<input  type="password" name="pass" id="pass" placeholder="*****" > <?php echo $notpass;  ?>
<p id="passerror"></p>

<hr>


<label for="">Confirm Password  </label>
<label  for=""> :</label>
<input  type="password" name="cpass" id="cpass" placeholder="*******" > <p id="cpasserror"></p>
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

<input  type="date" name="dob" id="dob" > <p id="doberror"></p>

</fieldset>

    
    <br>
    <hr>

  
<label  for="">Picture </label>
    <label  for=""> :</label>
    <input type="file">


    <hr>



    <label  for="">Salary</label>

    <label  for=""> :</label>
    
    <input  type="number" name="salary" id="salary" placeholder="2000" > <p id="salaryerror"></p>
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




<script src="../Js/script.js"></script>


</body>
</html>