<?php


include "../dbControler/db.php";
session_start(); 

$_SESSION["valid"]=null;
$password=$username="";
$error="";
$usernameerror=$passworderror="";


if(isset($_POST["submit"]))
{
  


$username=$_POST['username'];
$password=$_POST['password'];

if(!(empty($username)&&empty($password)))
{

  $connection = new db();
  $conobj=$connection->OpenCon();
  
  $userQuery=$connection->CheckUser($conobj,"user",$username,$password);
  
  
  if($userQuery->num_rows>0)
  {
    $row=$userQuery->fetch_assoc();
    $_SESSION["username"]=test_input($row["username"]);
  //  $_SESSION["username"]=test_input($_POST["username"]);
    
    $_SESSION["userid"]=test_input($row["userid"]);
  }

  else {
    $error = "Username or Password is invalid";
    }
    $connection->CloseCon($conobj);
    
    }
}


 
  if(empty($username)) 
  {
    
     $usernameerror="Please enter username";
     $_SESSION["valid"]="valid";
     

  }
  else
  {
    
   
    $_SESSION["valid"]=null;
  }

  if(empty($password))
  {
     $passworderror="Please enter password";

  }
  else
  {
   
    $_SESSION["valid"]=null;
  }



  //if(empty(te))

  



function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>