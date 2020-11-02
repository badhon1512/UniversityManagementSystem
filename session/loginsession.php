<?php
session_start(); 

$_SESSION["valid"]=null;
$password=$username="";
$usernameerror=$passworderror="";


if(isset($_POST["submit"]))
{
  $password=test_input($_POST["password"]);
$username=test_input($_POST["username"]);
 
  if(empty($username))
  {
    
     $usernameerror="Please enter username";
     

  }
  else
  {
    
    $_SESSION["username"]=test_input($_POST["username"]);
    $_SESSION["valid"]=null;
  }

  if(empty($password))
  {
     $passworderror="Please enter password";

  }
  else
  {
    $_SESSION["password"]=test_input($_POST["password"]);
    $_SESSION["valid"]=null;
  }



  //if(empty(te))

  

}

function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>