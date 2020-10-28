<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



<label style="margin-left:100px;  font-size:20px" for="">First name </label>

    <label style="margin-left:98px; color:maroon; font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="text" name="fname" id="name" placeholder="First name"> <?php echo $Notfname;  ?>
    


    <hr>



    <label style="margin-left:100px;  font-size:20px" for="">Last name  </label>

    <label style="margin-left:103px;  font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="text" name="lname" id="lname" placeholder="last name" > <?php echo $notlname;  ?>
    
    <!--<hr style="margin-left:400px; margin-:400px;">-->
    <hr>


    <label style="margin-left:100px;  font-size:20px" for="">Email</label>
    

    <label style="margin-left:140px; font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="text" name="email" id="email"
      placeholder="badhon1512@gmail.com"> <?php echo $notemail;  ?>
    
    <hr>


    <label style="margin-left:100px;  font-size:20px" for="">User Id </label>
    <label style="margin-left:130px; color:maroon; font-size:20px" for=""> :</label>
    <input style=" height:20px; width:200px" type="text" name="username" id="cemail" placeholder="badhon1512" > <?php echo $notusername;  ?>
    
    <hr>



    <label style="margin-left:100px;  font-size:20px" for="">Password </label>

    <label style="margin-left:115px; color:maroon; font-size:20px" for=""> :</label>
    
    <input style=" height:20px; width:200px" type="password" name="pass" id="pass" placeholder="*****" > <?php echo $notpass;  ?>
    
    <hr>


    <label style="margin-left:100px;  font-size:30px" for="">Confirm Password  </label>
    <label style="margin-left:10px; color:maroon; font-size:30px" for=""> :</label>
    <input style=" height:20px; width:200px" type="password" name="cpass" id="cpass" placeholder="*******" > <?php echo $notcpass;  ?>
    <br>
    <hr>

    <select name="depertment" id="depertment">

    <option value="CSE">CSE</option>
    <option value="EEE">CSE</option>
    <option value="BBA">CSE</option>
    </select>




    <fieldset style=" margin-left:100px;">
    <legend   >Gender</legend>

    <input  value="male" style="margin-left:40px;" type="radio" name="gender" id="male" >

<label for="">Male</label>

<input value="Female" style="margin-left:40px;" type="radio" name="gender" id="female" >

<label for="">Female</label>


<input style="margin-left:40px;" type="radio" name="gender" id="other" checked>

<label for="">Other</label> <?php echo $notGender;  ?>
    </fieldset>
   
    <br>
    <hr>   
<fieldset style=" margin-left:100px;">
  <legend >Date of Birth</legend>
    
    <input style="margin-left:40px; height:20px; width:200px" type="date" name="dob" id="date" > <?php echo $notdate;  ?>

    </fieldset>




</body>

</html>