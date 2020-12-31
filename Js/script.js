
function check()
{
  console.log("call");
  var flag=true;
var name=id=password=salary=dob=cpassword=address=email=telephone=superpower="";

  name=document.getElementById("name").value;
  
  email=document.getElementById("email").value;
  
  password=document.getElementById("pass").value;
  cpassword=document.getElementById("cpass").value;
  salary=document.getElementById("salary").value;
  dob=document.getElementById("dob").value;
  
  
  var letters = /^[A-Za-z' ']+$/;
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var numbers = /^[0-9]+$/;
  if(!name.match(letters))
  {
    
    flag=false;
  
    document.getElementById("nameerror").innerHTML="Please Enter valid name";
  }

  if(!email.match(mailformat))
  {
    
    flag=false;
    document.getElementById("emailerror").innerHTML="Please enter valid email";
  }
  if(password.length<6)
  {
    flag=false;
    document.getElementById("passerror").innerHTML="Password lenght must be at least 6 charecter";
  }
  if(password!=cpassword)
  {
    flag=false;
    document.getElementById("cpasserror").innerHTML="password doesn't match";
  }
  if(salary=="")
  {
    flag=false;
    document.getElementById("salaryerror").innerHTML="password enter salary";
  }
  if(dob=="")
  {
    flag=false;
    document.getElementById("doberror").innerHTML="password enter date of birth";
  }
 

  if(flag===false)
  {
  
    
    return false;
  }
  else
  {
    return true;
  }
  
 
}



function searchUser(table) {
  var str=document.getElementById("userid").value;
 console.log(str);
  if (str == "") {
    document.getElementById("searchinfo").innerHTML = "";
    
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("table").innerHTML = this.responseText;
      }
    }

    
    
    xmlhttp.open("GET","/Project/Json/Search.php?id="+str+"&tablename="+table,true);
    xmlhttp.send();
  }
}



