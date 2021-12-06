function SearchName() 
{
  var checkName = document.getElementById("name").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("message").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "/FTLabExam/control/formHandle.php?checkName="+checkName, true);
  xhttp.send();
}

function SearchInterest() 
{
  var checkInterest = document.getElementById("interest").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("message").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "/FTLabExam/control/formHandle.php?checkInterest="+checkInterest, true);
  xhttp.send();
}