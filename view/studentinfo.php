<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1 >yo</h1>


<?php include "header.php" ;  ?>
<script src="../Js/showstudent.js"></script>


<h1 style="text-align:center;">Student Information</h1>
<input type="text"  onkeyup="showUser(this.value)">
<button onclick="showUser('staff-1')">Search</button>


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

  include "../dbControler/db.php";
  $connect=new db();
  $conobj=$connect->OpenCon();
  $sql="SELECT * FROM student";
  $q="";
  if(isset($_GET['q']))
  {
    $q = intval($_GET['q']);
    if($q!="")
    {
      $sql="SELECT * FROM student WHERE id = '".$q."'";
    }
  }
  
  $result=$connect->SelectQuery($conobj,$sql);
  

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
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
  } else {
    echo "0 results";
  }




?>





</table>

      
  
</body>
</html>