<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php


include "../session/loginsession.php";
   $subject=$notice=$error="";
   $valid=true;

   if(!empty($_POST["notice"]))
   {
     $subject=$_POST["subject"];
     $notice=$_POST["message"];
   
     if($subject==""||$notice=="")
     {
       $valid=false;
      $error="please fill up valid information";
     }
     
    

    if($valid)
    {
      $sql="insert into notice values( '$subject','$notice')";
      $connect=new db();
       $conobj=$connect->OpenCon();
       
       //echo "$sql";
       $result=$connect->UpdateQuery($conobj,$sql);

       echo "notice post done";
    }
    
   }
   
   

?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label  for="">Subject</label>
<label  for="">:</label>
<input type="text" name="subject">
<br>
<br>

<label for="">Notice</label>

<label  for="">:</label>
<br>
<br>
<textarea name="message" rows="15" cols="40" ></textarea>
<br>
<?php
echo $error;
?>
<br>

<input type="submit" name="notice" value="post" >
<input type="reset" name="reset" value="reset" >

</form>





  
</body>
</html>