<!DOCTYPE html>
<html>
<head>

</head>
<body>
<table  id="txtHint" style="align:center;border:1px; width:100%; border: 1px solid black;border-collapse:collapse;">

<tr>
 
<th >Name</th>
<th >UserId</th>

<th >active</th>
<th >dateofbirth</th>

<th >gender</th>



</tr>



<?php
$id=$tablename="";
include '../dbControler/db.php';


$id = $_GET['id'];
$tablename=$_GET['tablename'];



 
 $connect=new db();
 $conobj=$connect->OpenCon();
if (!$conobj) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM $tablename WHERE userid = '$id'";
$result=$connect->SelectQuery($conobj,$sql);




while($row = $result->fetch_assoc()) {
  //echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " ". "<br>";

      echo "<td >$row[username]</td>";
      echo "<td >$row[userid]</td>";
    
      echo "<td >$row[activestatus]</td>";
      echo "<td >$row[dateofbirth]</td>";
   
      echo "<td >$row[gender]</td>";

     

      echo "<br>";





  echo "</tr>";

      

}
echo "</table>";
$connect->CloseCon($conobj);
?>
</body>
</html>