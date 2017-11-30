<!Doctype html>
<!DOCTYPE html>
<html>

      <script>
setInterval("getscore()",2000);

function getscore()
{
      obj=new XMLHttpRequest();
      obj.open("POST","reload.php",true);
      obj.send();
      obj.onreadystatechange=getdetails;
}


function getdetails()
{
      if(obj.readyState==4)
      {
            document.getElementById("div1").innerHTML=obj.responseText;
      }
}
</script>
<body onload="getscore()">
<h3>live score board</h3><hr style="width:200px;float: left"><br>
<div id="div1">
</div>
</body>


</html>

