<!DOCTYPE html>
<html>
<head>

</head>
<body>
<table  id="txtHint" style="align:center;border:1px; width:100%; border: 1px solid black;border-collapse:collapse;">

<tr>
 
<th style=" border: 1px solid black;">Name</th>
<th style=" border: 1px solid black;">UserId</th>
<th style=" border: 1px solid black;">Depertment</th>
<th style=" border: 1px solid black;">active</th>
<th style=" border: 1px solid black;">dateofbirth</th>

<th style=" border: 1px solid black;">gender</th>
<th style=" border: 1px solid black;">cgpa</th>


</tr>



<?php
$q="";
include '../dbControler/db.php';


$q = $_GET['id'];


 
 $connect=new db();
 $conobj=$connect->OpenCon();
if (!$conobj) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM student WHERE userid = '$q'";
$result=$connect->SelectQuery($conobj,$sql);
echo $sql;
echo $q;




while($row = $result->fetch_assoc()) {
  //echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " ". "<br>";

      echo "<td style='text-align:center;  border: 1px solid black;'>$row[username]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[userid]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[depertment]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[activestatus]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[dateofbirth]</td>";
   
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[gender]</td>";

      echo "<td style='text-align:center;  border: 1px solid black;'>$row[cgpa]</td>";

      echo "<br>";





  echo "</tr>";

      

}
echo "</table>";
$connect->CloseCon($conobj);
?>
</body>
</html>