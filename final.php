
<!----------SESSION START------------------>
<?php 
session_start();
?>

<!------------MAIN HTML PAGE------------------->

<!DOCTYPE html>
<html>
<head>

<!----for qualification icon--->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--------speciality icon------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!---------------PIE CHART-------------------->

<script>

//function for counting the respective no of patients

<?php

function patient_count($var){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_curr where Severity=".$var; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 
}
?>

//for displaying

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  theme: "dark2",
  exportFileName: "Doughnut Chart",
  exportEnabled: true,
  animationEnabled: true,
  title:{
    text: "Patient Severity Distribution"
  },
  legend:{
    cursor: "pointer",
    itemclick: explodePie
  },
  data: [{
    type: "doughnut",
    innerRadius: 50,
    showInLegend: true,
    dataPoints: [
      { y: <?php patient_count(5); ?> , name: "Critical" },
      { y: <?php patient_count(4); ?>, name: "Very Serious" },
      { y: <?php patient_count(3); ?>, name: "Serious" },
      { y: <?php patient_count(2); ?>, name: "Normal Need Care" },
      { y: <?php patient_count(1); ?>, name: "Normal" }
    ]
  }]
});
chart.render();

function explodePie (e) {
  if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
    e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
  } else {
    e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
  }
  e.chart.render();
}

}
</script>

<!-------------------Basic css from w3 school------------------>



<style>

 /*------thats the table style---*/

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



</style>

<!-------------positioning of piechart-------------------->

<style>
#chartContainer{
position:fixed;
top:390px;
}

body {
    background-image: url("bkg2e.jpg");
    background-repeat: repeat-x;
    background-size: 100% 100%;
}

</style>

</head>
<!---------------------------------------MAIN BODY STARTS FROM HERE--------------------------------->

<body class="w3-theme-l5">

<!-- Navbar -- the LOG OUT BUTTON-->
<div class="w3-top" style="position: fixed;">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" >
    <a href="sarthak.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" ><i class="fa fa-home w3-margin-right" ></i>Log Out</a>
 </div>
 </div>


<!----------------------------PROFILE PART---------->

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px" >    
  <!-- The Grid -->
  <div class="w3-row" >
    <!-- Left Column -->
    <div class="w3-col m3" >
      <!-- Profile -->
      <div class="w3-card w3-round w3-white" style="position: fixed;width: 22%;heigth: 10px;" id="profile">
        <div class="w3-container" style="height: 305px">
         <h2 class="w3-center">My Profile</h2>
         
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
$sql = "SELECT * FROM doctor where LicenseID='XYZ170635'";
$result = $conn->query($sql);
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<p class='w3-center'><img src='doc3.png' class='w3-circle' style='height:106px;width:106px' alt='no image'></p>
                        <hr>
                        <pstyle='text-color: #666666'>&nbsp&nbsp&nbsp<i class='fa fa-pencil' style='font-size:24px;color: #666666'></i>"."&nbsp&nbsp".$row["Name"]."</p>
                        <p>&nbsp&nbsp&nbsp<i class='fa fa-user-md' style='font-size:24px;color: #666666'></i>"."&nbsp&nbsp". $row["Specialist"]."</p>
                        <p>&nbsp&nbsp&nbsp<span class='glyphicon glyphicon-education' style='color: #666666;font-size: 24px'></span>"."&nbsp&nbsp". $row["Qualification"]."</p><br><br>";

    }
$conn->close();

?>



      </div>
    </div>
  <br>
      
      <!-- Accordion -->
        
      <br>
      
   <!------------------PART WHERE PIE CHART IS DISPLAYED---------------------->

    <div id="chartContainer" style="height: 45%; width: 22%;"  ></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        
     
     </div>
    
  <!-----------------------NAVIGATION BUTTONS------------------->  
  
    
    <!--------------refered patients-------> 
    <div class="w3-col m7" style="width: 75%">
      <div class="w3-row-padding w3-margin-bottom">
      
    <div id="button" class="w3-quarter" position="absoulte">
    
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>

          <!--back end for counting no of refered patients-->
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_referred"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?>   
          </h3>
        </div>
        <div class="w3-clear"></div>
        <a href="#refered" style="text-decoration: none;"><h4 align="center">Refered Patients</h4></a>
      </div>
    </div>
   
    <!--------------current patients-------> 
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
          <!--back end for counting no of patients-->
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_curr"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?>          
            
          </h3>
        </div>
        <div class="w3-clear"></div>
        <a href="#current" style="text-decoration: none;"><h4 align="center">Current Patients</h4></a>
      </div>
    </div>

    <!--------------medical lab list-------> 
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>

            <!--back end for counting no labs-->
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_curr"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?>   
          </h3>
        </div>
        <div class="w3-clear"></div>
        <a href="#lab_list" style="text-decoration: none;"><h4 align="center">Medical Labs List</h4></a>
      </div>
    </div>

    <!--------------solved patients-------> 
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
            
            <!--back end for counting no of solved patients-->
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_closed"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?>   
          </h3>
        </div>
        <div class="w3-clear"></div>
        <a href="#solved_cases" style="text-decoration: none;"><h4 align="center">Solved Cases</h4></a>
      </div>
    </div>
  </div>
  
  <hr>

<!------------------------------------------NEW PATIENTS------------------------------------------------------->  
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="curnt"><br>
        <img src="new_patient2png.png"  style="width:60px;float: left;">
        <span class="w3-right w3-opacity">New Patient</span>
        <h2 align="center">NEW PATIENT</h2>
        <hr class="w3-clear">
        <form>
          <center>
            ENTER AADHAR NUMBER: <input type="text">
            <br>
            <br>
            <input type="submit" value="SUBMIT" class="w3-button w3-theme-d1 w3-margin-bottom" style="border-radius: 10px;">
          </center>
        </form>
        <br>
          <div class="w3-row-padding" style="margin:0 -16px">
            
            
        </div> 
      </div>
<hr>
<!--------------------------------------CURRENT PATIENTS------------------------------------------------------->
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="current"><br>
        <img src="current_patient.png" style="width: 60px;float: left;">
        <span class="w3-right w3-opacity">

          <!--back end for counting no of patients-->
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_curr"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?>          
        </span>
        <h2 align="center">CURRENT PATIENTS</h2>
        <hr class="w3-clear">
        <br>
          <div class="w3-row-padding" style="margin:0 -16px">
            <center>

<!--------------------------------------AJAX FOR DISPLAYING SIMULTENOUSLY-------------------------> 
<script type="text/javascript">
  
function show_list()
{    

  
    

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","show_list.php?disease="+document.getElementById('disease').value+"&severity="+document.getElementById('severity').value,true);
        xmlhttp.send();
    
  }  


</script>

   <!-----back end for ---- options of disease--------->

   SELECT DISEASE:

<?php
$severname="localhost";
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


&nbsp&nbsp&nbsp
<!-----back end for ---- options of severity--------->

   SELECT SEVERITY:

<?php
$severname="localhost";
$username="root";
$password="";
$dbname="medhelp";

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT DISTINCT Severity FROM xyz170635_curr";
$result=$conn->query($sql);
echo"<select name='severity' onchange='show_list()' id='severity' >
  <option value=''>Select a severity</option>";
while($row = $result->fetch_assoc()) {
     echo "<option value='".$row["Severity"]."'>".$row["Severity"]."</option>";
    }
 echo "</select>";
$conn->close();

?>
<br><br>
<div id="txtHint">


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="medhelp";

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT * FROM xyz170635_curr";
$result=$conn->query($sql);
echo"<table >
        <tr>
          <th>Sr.no</th>
          <th>Date Admitted</th>
          <th>Patient Name</th>
          <th>Disease</th>
          <th>Severity</th>
        </tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Sno"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Patient_Name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Diagnosis"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Severity"]."</a></td>
            </tr>";
    }
echo "</table>";
$conn->close();
?>

</div>
<br>
             </center>   
          </div> 
      </div>  
<hr>

<!------------------------------------REFERED PATIENTS------------------------------------------------------->
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="refered"><br>
        <img src="referred_patient.png"  style="width:60px;float: left">
        <span class="w3-right w3-opacity">

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_referred"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?> 

        </span>
        <h2 align="center">REFERED CASES</h4><br>
        <hr class="w3-clear">

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
$sql = "SELECT * FROM xyz170635_referred";
$result = $conn->query($sql);
    // output data of each row
echo"<table >
  <tr>
    <th>Sr.no</th>
    <th>Date Of Reference</th>
    <th>Patient Name</th>
    <th>Refered By</th>
    <th>Comments</th>
  </tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Sno"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Patient name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Doctor"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Comments"]."</a></td>
  </tr>";

    }
  echo "</table>";

$conn->close();

?>
   
        <br><br>      
      </div> 
   <hr>

<!-------------------------------LAB LIST--------------------------------------------------------------------->
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="lab_list"><br>
        <img src="lab_list.png" style="width:60px;float: left">
        <span class="w3-right w3-opacity">
          
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_referred"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?>   

        </span>
        <h2 align="center">MEDICAL LAB LIST</h4><br>
        <hr class="w3-clear"> 
 
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
$sql = "SELECT * FROM xyz170635_referred";
$result = $conn->query($sql);
    // output data of each row
echo"<table >
  <tr>
    <th>Sr.no</th>
    <th>Date Of Reference</th>
    <th>Patient Name</th>
    <th>Refered By</th>
    <th>Comments</th>
  </tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td>".$row["Sno"]."</a></td>
    <td>".$row["Date"]."</a></td>
    <td>".$row["Patient name"]."</a></td>
    <td>".$row["Doctor"]."</a></td>
    <td>".$row["Comments"]."</a></td>
  </tr>";

    }
  echo "</table>";

$conn->close();

?>
<br>    
      </div> 
     <hr>
<!-----------------------------SOLVED CASES--------------------------------------------------------------------->
       <div class="w3-container w3-card w3-white w3-round w3-margin" id="solved_cases"><br>
        <img src="completed.jpg" style="width:60px;float: left;">
        <span class="w3-right w3-opacity">
          
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM xyz170635_closed"; /////////////////////need to set the table name
$r=$conn->query($sql);
echo $r->num_rows;
 $conn->close(); 

?>   

        </span>
        <h2 align="center">SOLVED CASES</h4><br>
        <hr class="w3-clear">


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
$sql = "SELECT * FROM xyz170635_closed";
$result = $conn->query($sql);
    // output data of each row
echo"<table >
  <tr>
    <th>Sr.no</th>
    <th>Patient Name</th>
    <th>From</th>
    <th>To</th>
    <th>Diagnosis</th>
  </tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Sno"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Patient_Name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["From_Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["To_Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Diagnosis"]."</a></td>
  </tr>";

    }
  echo "</table>";

$conn->close();

?>        
 <br>
      </div>  

<!-------------------------------------XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX------------------------>           
    
    </div>
  </div>
</div>
      
      
      
      
      
   
<br>

<!-- Footer -->



 
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

</body>
</html> 
