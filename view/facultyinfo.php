<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>







<h1 style="text-align:center;">Fcaulty Information</h1>

<h1 id=#confirmation></h1>




<table style="align:center;border:1px; width:100%; border: 1px solid black;border-collapse:collapse;">

<tr>
 
<th style=" border: 1px solid black;">Name</th>
<th style=" border: 1px solid black;">UserId</th>
<th style=" border: 1px solid black;">Depertment</th>
<th style=" border: 1px solid black;">Email</th>
<th style=" border: 1px solid black;">active</th>
<th style=" border: 1px solid black;">dateofbirth</th>
<th style=" border: 1px solid black;">salary</th>
<th style=" border: 1px solid black;">gender</th>

</tr>


<?php

  include "../dbControler/db.php";
  $connect=new db();
  $conobj=$connect->OpenCon();
  $sql="SELECT * FROM faculty";
  $result=$connect->SelectQuery($conobj,$sql);

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      //echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " ". "<br>";

      echo "<td style='text-align:center;  border: 1px solid black;'>$row[username]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[userid]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[depertment]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[email]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[activestatus]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[dateofbirth]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[salary]</td>";
      echo "<td style='text-align:center;  border: 1px solid black;'>$row[gender]</td>";
      echo "<br>";





  echo "</tr>";


      

    }
    
  } else {
    echo "0 results";
  }

  $connect->CloseCon($conobj);
  




?>






</table>
<br>
<br>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="">Enter id for delete any specific faculty :</label>
  <input type="text" name="uid">
  <input type="submit" id="delete" name="delete">


</form>
<br>
<br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="">Enter id for Update any specific faculty :</label>
  <input type="text" name="idforupdate" id="idforupdate">
  <input type="submit" id="update" name="update">


</form>
<br>
<br>

<?php 
$id="";


function  update()
{
  

  $connect=new db();
  $conobj=$connect->OpenCon();
  $id=$_POST['idforupdate'];
  echo "$id";
  $sql="SELECT * FROM faculty where userid ='$id'";
  //echo "$sql";
  $result=$connect->SelectQuery($conobj,$sql);

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {

      $malecheck="";
      $femalecheck="";
      if($row['gender']=="male")
      {
        $malecheck="checked";
      }
      else if($row['gender']=="female")
      {
        $femalecheck="checked";
      }
      
     
      //echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " ". "<br>";
      $server=htmlspecialchars($_SERVER["PHP_SELF"]);
      echo "<form method='post' action='$server' onsubmit='showAlert()'>
      ";
      echo "<lable>Id   : </lable>";
      echo "<input type='text' name='uid' value='$row[userid]' > <br><br>";
      echo "<lable>Name  : </lable>";

      echo "<input type='text' name='uname' value=$row[username]> <br><br>";
      echo "<lable>Salary  :   : </lable>";
      echo "<input type='text' name='usalary' value=$row[salary]> <br><br>";
      echo "<lable>Gender   : </lable>";
      
      echo "<input type='radio' value='male' name='gender' id='male' $malecheck> male";
      echo "<input type='radio' value='female' name='gender' id='female' $femalecheck> female <br>";
      
      echo "<lable>Email   : </lable>";
      echo "<input type='text'  name='email' value=$row[email]> <br><br>";


      echo "<input type='submit' id='updateconfirm' name='updateconfirm' value='update'>";

      echo "</form>";
    


     
  $connect->CloseCon($conobj);
      

    }
  } 
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{


     if(!empty($_POST["delete"]))
     {
     
      
       $sql="delete from faculty WHERE
       userid='$_POST[uid]'";
       $connect=new db();
       $conobj=$connect->OpenCon();
       
       //echo "$sql";
       $result=$connect->UpdateQuery($conobj,$sql);

     }

     //fetch
     else if(!empty($_POST["update"]))
     {
       echo "update";
       update();
       
     }
     ///update 
     else if(!empty($_POST["updateconfirm"]))
     {
       $username=$_POST["uname"];
      
       $sql="UPDATE faculty SET username='$username',salary='$_POST[usalary]',gender='$_POST[gender]', email='$_POST[email]' WHERE
       userid='$_POST[uid]'";
       $connect=new db();
       $conobj=$connect->OpenCon();
       
       //echo "$sql";
       $result=$connect->UpdateQuery($conobj,$sql);

     }
    
  
}
?>



<script src="../Js/updateScript.js"></script>

      
  
</body>
</html>