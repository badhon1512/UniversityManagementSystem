<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1 >Notice</h1>






<table id="table">

<tr>
 
<th >subject</th>
<th >notice</th>



</tr>


<?php

  include "../dbControler/db.php";
  $connect=new db();
  $conobj=$connect->OpenCon();
  $sql="SELECT * FROM notice";
  $result=$connect->SelectQuery($conobj,$sql);

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      //echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " ". "<br>";

      echo "<td >$row[subject]</td>";
      echo "<td >$row[notice]</td>";
     




  echo "</tr>";


      

    }
    
  } else {
    echo "0 results";
  }

  $connect->CloseCon($conobj);
  




?>







      
  
</body>
</html>