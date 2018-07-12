<html>
<head>

</head>
<body>

<form method='POST' action='refered.php'>



SELECT STATE:
<select name='state' id='state' onchange="showcity()">

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="soc";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT DISTINCT State_ut FROM doctor";
$result=$conn->query($sql);
echo "<option value=''></option>";
while($row=$result->fetch_assoc())
  echo "<option value='".$row['State_ut']."'>".$row['State_ut']."</option>";
$conn->close();
?>
</select>

<script>
function showcity() {


        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("city_p").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","getcity.php?state="+document.getElementById('state').value,true);
        xmlhttp.send();
    
}


function showspeciality() {
       

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("speciality_p").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","getspeciality.php?city="+document.getElementById('city').value+"&state="+document.getElementById('state').value,true);
        xmlhttp.send();
    
}


function show_docs() {
       
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showdocs_p").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","showdocs.php?city="+document.getElementById('city').value+"&state="+document.getElementById('state').value+"&speciality="+document.getElementById('speciality').value,true);
        xmlhttp.send();
    
}
</script>





<p id='city_p'>
SELECT CITY:
<select name="city" id='city' onchange="showspeciality()">
  <option value="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
  </select>
</p>





<p id='speciality_p'>
  SELECT SPECIALITY:
  <select name="speciality" id='speciality'>
    <option value="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
  </select>
</p>


<input type="button" value="SHOW DOCTORS" onclick="show_docs()">

<p id="showdocs_p">
SELECT STATE,CITY AND SPECIALITY THEN CLICK ON ABOVE BUTTON 
</p>

<input type="submit" value="submit">
</form>
<br>



</body>
</html> 