<!DOCTYPE html>
<html>
<title>Patient Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

.w3-container[type=button]:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

body {
    background-image: url("bkg2e.jpg");
    background-repeat: repeat-x;
    background-size: 100% 100%;
}

button {
    background-color: #1f1f2e; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
}

#s1
{
    background-color:#2aa22a; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
}

#s2
{
    background-color:#2aa22a; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
}
</style>


<!-----------------------------------------------------------------------MAIN BODY---------------------------------------------------------------------------------------------------->


<body style="background-image:url('bkg2e.jpg');background-repeat:repeat;" class="w3-theme-l5">

<!---------------- Navigational-bar ----------------->

<div class="w3-top">
 <div style="background-color: #35353F" class="w3-bar w3-left-align w3-large">
  
  <a href="#" style="background-color: #35353F;color: white;" class="w3-bar-item w3-button w3-padding-large w3-right w3-hover-white"><i class="fa fa-home w3-margin-right"></i>Logout</a>
  <a href="history.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" >MEDICAL HISTORY</a>
  <a href="patient_profile.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" >MAIN PAGE</a>
  <a href="medora.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" >MEDORA</a>
     </div>
</div>

<!--xxxxxxx  navigational bar  xxxxxxxxxxxxxxxxxxx-->



<div class="w3-container w3-content" style="max-width:68%;margin-top:3.25%">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">

 <!------------------------------------- Profile of patient------------------------------------------>

      <div class="w3-card w3-round w3-white" style="left:2%;top:8%;width:19%;height:47%;position:fixed" type>
        <div class="w3-container">
         <h2 class="w3-center"><b>Patient's Profile</b></h2>
         <p class="w3-center"><img src="https://i.ytimg.com/vi/hvfoV4h1qHg/maxresdefault.jpg" class="w3-circle" style="height:150px;width:40%" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>Name: </strong>Sarthak</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><strong>Age: </strong>20</p>
         <p><i class="fa fa-venus-mars fa-fw w3-margin-right w3-text-theme"></i><strong>Sex: </strong>Male</p>
         <p><i class="fa fa-inr fa-fw w3-margin-right w3-text-theme"></i><strong>Marrital Status: </strong>Nope</p>
         <p><i class="fa fa-comment-o fa-fw w3-margin-right w3-text-theme"></i><strong>Comments: </strong>Chota Bheem Fan</p>
        </div>
      </div>
       
      <a href="#">
          <button  style="position: fixed;top: 56%;left: 2%;height:12%x;width: 19%;font-size: 20px">UPLOAD PREVIOUS REPORTS</button> 
      </a>
      <br>


<!------------------------------------------------------------------------HISTORY------------------------------------------------------------------>
    </div>
<div class="w3-col m7">
      <div class="w3-container w3-card w3-white w3-round w3-margin" style="position:relative;left:-25%;width:180%;"><br>
        <img src="history.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:50px">
        <h2 align="center">MEDICAL HISTORY</h2>
        <hr class="w3-clear">

      <!---BACKEND FOR AJAX---->



      <!---xxxxxxxxxxxxxxxxxxxxx----->


        <form style="font-size: 20px">
          <CENTER>
            GET MEDICAL HISTORY FROM <input type="text" id="sd" style="width: 40px;text-align: center;border-radius: 5px">&nbsp/&nbsp
            <input type="text" id="sm" style="width: 40px;text-align: center;border-radius: 5px">&nbsp&nbsp/&nbsp
            <input type="text" id="sy" style="width: 60px;text-align: center;border-radius: 5px"> to 
            <input type="text" id="ed" style="width: 40px;text-align: center;border-radius: 5px">&nbsp/&nbsp
            <input type="text" id="em" style="width: 40px;text-align: center;border-radius: 5px">&nbsp/&nbsp
            <input type="text" id="ey"style="width: 60px;text-align: center;border-radius: 5px"><br><br>
            WITH DISEASE

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="medhelp";

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT DISTINCT Diagnosis FROM xyz170635_curr";
$result=$conn->query($sql);
echo"<select name='disease' onchange='show_list()' id='disease'>
  <option value=''>Select a disease</option>";
while($row = $result->fetch_assoc()) {
     echo "<option value='".$row["Diagnosis"]."'>".$row["Diagnosis"]."</option>";
    }
 echo "</select>";
$conn->close();
?>           

           <br><br><br>

          </CENTER>
        </form>

      <div id="txtHint"><!--DISPLAY RECENT 10 ENTRIES IN THIS REGION---></div>

      </div>
      


    
  

  
<!-- End Page Container -->
</div>
<br>


<!-----------XXXXXXXXXXX------------------------->

<script>
// Accordion

function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


</script>

<script>

<?php

echo "window.onload = function () {";
echo "var chart1 = new CanvasJS.Chart('bloodpressure',{";
  // theme: "light2",
echo  "animationEnabled: true,";
echo "zoomEnabled: true,";
echo "title: {";
echo "text: 'Blood Pressure'";
echo "},";
echo "axisX: {"."valueFormatString: 'MMM YYYY'"."  },";
echo "axisY2: {gridThickness: 0.3,";
echo "suffix: 'mmHg',"."interval: 30,"."gridColor: 'black',"."minimum:20,"."maximum:180,"."},";
echo "toolTip: {"."shared: true"."},"."legend: {"."cursor: 'pointer',"."verticalAlign: 'top',"."horizontalAlign: 'center',"."dockInsidePlotArea: true,"."},";
echo "data: [{ type:'line',axisYType: 'secondary',name: 'Diastolic',showInLegend: true,markerSize: 0,yValueFormatString: '#,###mmHg',dataPoints: [";
?>   
      { x: new Date(2014, 00, 01), y: 60 },
      { x: new Date(2014, 01, 01), y: 65 },
      { x: new Date(2014, 02, 01), y: 70 },
      { x: new Date(2014, 03, 01), y: 68 },
      { x: new Date(2014, 04, 01), y: 88 },
      { x: new Date(2014, 05, 01), y: 92 },
      { x: new Date(2014, 06, 01), y: 75 },
      { x: new Date(2014, 07, 01), y: 66 },
      { x: new Date(2014, 08, 01), y: 76 },
      { x: new Date(2014, 09, 01), y: 74 },
      { x: new Date(2014, 10, 01), y: 69 },
      { x: new Date(2014, 11, 01), y: 56 },
      { x: new Date(2015, 00, 01), y: 58 },
      { x: new Date(2015, 01, 01), y: 87 },
      { x: new Date(2015, 02, 01), y: 77 },
      { x: new Date(2015, 03, 01), y: 88 },
      { x: new Date(2015, 04, 01), y: 66 },
      { x: new Date(2015, 05, 01), y: 59 },
      { x: new Date(2015, 06, 01), y: 68 },
      { x: new Date(2015, 07, 01), y: 78 },
      { x: new Date(2015, 08, 01), y: 55 },
      { x: new Date(2015, 09, 01), y: 47 },
      { x: new Date(2015, 10, 01), y: 42 },
      { x: new Date(2015, 11, 01), y: 44 },
      { x: new Date(2016, 00, 01), y: 49 },
      { x: new Date(2016, 01, 01), y: 52 },
      { x: new Date(2016, 02, 01), y: 56 },
<?php 
echo "]";
echo "},";
?>


<?php
 echo "{ type: 'line',   axisYType: 'secondary',  name: 'Systolic', showInLegend: true,  markerSize: 0,  yValueFormatString: '#,###mmHg', dataPoints: [";
 ?>
      { x: new Date(2014, 00, 01), y: 95 },
      { x: new Date(2014, 01, 01), y: 85 },
      { x: new Date(2014, 02, 01), y: 110 },
      { x: new Date(2014, 03, 01), y: 123 },
      { x: new Date(2014, 04, 01), y: 156 },
      { x: new Date(2014, 05, 01), y: 145 },
      { x: new Date(2014, 06, 01), y: 136 },
      { x: new Date(2014, 07, 01), y: 132 },
      { x: new Date(2014, 08, 01), y: 135 },
      { x: new Date(2014, 09, 01), y: 144 },
      { x: new Date(2014, 10, 01), y: 140 },
      { x: new Date(2014, 11, 01), y: 152 },
      { x: new Date(2015, 00, 01), y: 150 },
      { x: new Date(2015, 01, 01), y: 155 },
      { x: new Date(2015, 02, 01), y: 163 },
      { x: new Date(2015, 03, 01), y: 133 },
      { x: new Date(2015, 04, 01), y: 125 },
      { x: new Date(2015, 05, 01), y: 144 },
      { x: new Date(2015, 06, 01), y: 155 },
      { x: new Date(2015, 07, 01), y: 139 },
      { x: new Date(2015, 08, 01), y: 124 },
      { x: new Date(2015, 09, 01), y: 113 },
      { x: new Date(2015, 10, 01), y: 103 },
      { x: new Date(2015, 11, 01), y: 109 },
      { x: new Date(2016, 00, 01), y: 107 },
      { x: new Date(2016, 01, 01), y: 111 },
      { x: new Date(2016, 02, 01), y: 119 },
      { x: new Date(2016, 03, 01), y: 135 }
<?php
echo "] }] });";
?>


    //  SUGAR LEVEL CHART  

var chart2 = new CanvasJS.Chart("sugarlevel",{
  
  animationEnabled: true,
  zoomEnabled: true,
    title: {
    text: "Sugar Level",

  },
  axisX: {
    valueFormatString: "hh TT DD MMM YYYY"
  },
  axisY2: {
    gridThickness: 0.3,
  
    suffix: "mg/dL",
        interval: 50,
      gridColor: "black",
      minimum:0,
      maximum:300,
  },
  toolTip: {
    shared: true
  },
  
  data: [{
    type:"line",
    axisYType: "secondary",
    lineColor:"#E17101",
    name: "Sugar Level",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###mg/dL",
    dataPoints: [

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *FROM xyz170635_sugar_level ORDER BY date_time ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

     $date = new DateTime($row['date_time']);
     $r = $date->format('Y-m-d H:i:s');
     $arr=explode(" ",$r);
     $darr=explode("-", $arr[0]);
     $tarr=explode(":",$arr[1]);
        echo "{x: new Date(Date.UTC (".$darr[0].",".$darr[1].",".$darr[2].",".$tarr[0].",".$tarr[1].") ), y: ".$row['sugar_lvl'] ."},";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

<?php
echo" ]  }] });"
?>

 
chart1.render();
chart2.render();
<?php
 echo "}";
 ?>
</script>

</body>
</html>


