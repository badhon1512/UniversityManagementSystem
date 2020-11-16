<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "universitymanagement";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE userid='". $username."' AND userpassword='". $password."'");
 return $result;
 }


 function SelectQuery($conn,$sql)
 {
  
  $result = $conn->query($sql);

  return $result;

 }


 function InsertQuery($conn,$sql)
{
  
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    return true;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>