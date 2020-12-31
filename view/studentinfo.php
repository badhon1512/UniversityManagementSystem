<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>







<h1 >Student Information</h1>

<h1 id=#confirmation></h1>


<br>

<input type="text" id="userid">
<button onclick="searchUser('student')">search</button>
<button><a href="studentinfo">Refresh</a></button>


<table id="searchinfo"></table>

<table id="table">

<tr>
 
<th >Name</th>
<th >UserId</th>
<th >Depertment</th>
<th >Email</th>
<th >active</th>
<th >dateofbirth</th>
<th >cgpa</th>
<th >gender</th>

</tr>


<?php

  include "../dbControler/db.php";
  $connect=new db();
  $conobj=$connect->OpenCon();
  $sql="SELECT * FROM student";
  $result=$connect->SelectQuery($conobj,$sql);

  if ($result->num_rows> 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      //echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " ". "<br>";

      echo "<td >$row[username]</td>";
      echo "<td >$row[userid]</td>";
      echo "<td >$row[depertment]</td>";
      echo "<td >$row[email]</td>";
      echo "<td >$row[activestatus]</td>";
      echo "<td >$row[dateofbirth]</td>";
      echo "<td >$row[cgpa]</td>";
      echo "<td >$row[gender]</td>";
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
  //echo "$id";
  $sql="SELECT * FROM student where userid ='$id'";
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
      
    // echo $row['username'];
      //echo "id: " . $row["userid"]. " - Name: " . $row["username"]. " ". "<br>";
      $server=htmlspecialchars($_SERVER["PHP_SELF"]);
      echo "<form method='post' action='$server' onsubmit='showAlert()'>
      ";
      echo "<lable>Id   : </lable>";
      echo "<input type='text' name='uid' value='$row[userid]' > <br><br>";
      echo "<lable>Name  : </lable>";

      echo "<input type='text' name='uname' value='$row[username]'> <br><br>";
      echo "<lable>cgpa  :   : </lable>";
      echo "<input type='text' name='ucgpa' value=$row[cgpa]> <br><br>";
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
     
      
       $sql="delete from student WHERE
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
      
       $sql="UPDATE student SET username='$username',cgpa='$_POST[ucgpa]',gender='$_POST[gender]', email='$_POST[email]' WHERE
       userid='$_POST[uid]'";
       $connect=new db();
       $conobj=$connect->OpenCon();
       
       //echo "$sql";
       $result=$connect->UpdateQuery($conobj,$sql);

     }
    
  
}
?>



<script src="../Js/script.js"></script>

      
  
</body>
</html>