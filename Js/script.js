
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
        document.getElementById("searchinfo").innerHTML = this.responseText;
      }
    }

    
    
    xmlhttp.open("GET","/Project/Json/Search.php?id="+str+"&tablename="+table,true);
    xmlhttp.send();
  }
}