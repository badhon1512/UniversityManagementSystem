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


?>



<form action=""   style="margin-top:100px;">
<label style="margin-left:400px;" for="">Subject</label>
<label style="margin-left:20px;" for="">:</label>
<input type="text" style="width:300px">
<br>
<br>

<label style="margin-left:400px;" for="">Notice</label>

<label style="margin-left:20px;" for="">:</label>
<br>
<br>
<textarea name="message" rows="15" cols="40" style="margin-left:480px"></textarea>
<br>

<input type="submit" name="submit" value="post" style="margin-left:480px;margin-top:20px; width:150px;">
<input type="reset" name="reset" value="reset" style="margin-left:10px;margin-top:20px; width:150px;">

</form>





  
</body>
</html>