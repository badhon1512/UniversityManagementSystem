
function showUser(str) {
  console.log(str);
  console.log('x');
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }

    
    
    xmlhttp.open("GET","/Project/Json/Search.php?id="+str,true);
    xmlhttp.send();
  }
}