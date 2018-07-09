<?php
session_start();
if(!isset($_SESSION['Aadhar']))
  header('Location:as_patient.php');
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Aadhar=$_SESSION['Aadhar'];
$sql = "SELECT * FROM patient where AADHAR='".$Aadhar."'";
//else echo 0;
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<title>Patient Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="medhelp blue.png">
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

#s4
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
body { 
  background: url(bkgf.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>


<!-----------------------------------------------------------------------MAIN BODY---------------------------------------------------------------------------------------------------->


<body>

<!---------------- Navigational-bar ----------------->

<div class="w3-top">
  <div class="w3-bar w3-theme-d5 w3-left-align w3-large" style="background-color:black;">
  <span style='position: relative;height: 100%;width: 3%;float: left;vertical-align: middle;'><a href='login_page.php' class="w3-bar-item w3-padding-large w3-theme-d5 w3-left" style="position: relative;text-decoration: none;width: 20%;vertical-align: middle;"><img src='medhelp blue.png' style='height: 22px;width: 22px;float: left;vertical-align: middle;margin-top:4px 
    '></span></a>
  <a href="as_patient.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-right w3-theme-d5"><i class="fa fa-sign-out w3-margin-right"></i>LOGOUT</a>
  <a href="patient_profile.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5"><i class="fa fa-home w3-margin-right"></i>HOME</a>
  <a href="medorap.php" class="w3-bar-item w3-button w3-padding-large  w3-hover-white w3-theme-d5"><b><span style="font-size:18px">MEDORA</span></b></a>
  <a href="history1.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5" >MEDICAL HISTORY</a>
     </div>
</div>

<!--xxxxxxx  navigational bar  xxxxxxxxxxxxxxxxxxx-->



<div class="w3-container w3-content" style="max-width:68%;margin-top:3.25%">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">

 <!------------------------------------- Profile of patient------------------------------------------>

      <div class="w3-card w3-round" style="left:2%;top:8%;width:19%;position:fixed;background-color:  rgba(255, 255, 255, 0.65);color:black" type>
        <div class="w3-container">
         <h2 class="w3-center"><b>Profile</b></h2>
         <p class="w3-center"><img src="<?php echo $row['image']; ?>" class="w3-circle" style="height:150px;width:40%" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>Name: </strong><?php echo $row["Name"]; ?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><strong>Age: </strong><?php echo $row["AGE"]; ?></p>
         <p><i class="fa fa-venus-mars fa-fw w3-margin-right w3-text-theme"></i><strong>Sex: </strong><?php echo $row["SEX"]; ?></p>
         <p><i class="fa fa-inr fa-fw w3-margin-right w3-text-theme"></i><strong>Marital Status: </strong><?php echo $row["MARITAL STATUS"]; ?></p>
         <p><i class="fa fa-comment-o fa-fw w3-margin-right w3-text-theme"></i><strong>Comments: </strong><?php echo $row["COMMENTS"]; ?></p>
         <p><i class="fa fa-comment-o fa-fw w3-margin-right w3-text-theme"></i><strong>Blood Group: </strong><?php echo $row["BLOODGROUP"]; ?></p>
        </div>
      </div>
       
      <br>

<!------------------------------------------GRAPHS------------------------------------------->

  <div class="w3-container w3-card w3-white w3-round w3-margin" id="bloodpressure" style="position:fixed;top:6.5%;right:1%;width:33%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <div class="w3-container w3-card w3-white w3-round w3-margin" id="sugarlevel" style="position:fixed;top:50%;right:1%;width:33%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 

    <!-- End Left Column -->
    </div>

<!--------------------------------------------------------------------------DIVISIONS FOR MAIN PART----------------------------------------------------------------------------------->



    
  
  <!---------------------FIND A DOC---------------->
      


      <div class="w3-container w3-card w3-round w3-margin"  style="position:relative;left:10%;width:60% ;margin-top:6.5%;background-color:  rgba(255, 255, 255, 0.65);color:black" id="find_a_doc"><br>
        <img src="find_doc.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:10%">
        <h2 align="center">FIND A DOC</h2>
        <hr class="w3-clear">
      



          <center style="font-size: 150%">
        STATE:

<?php
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT DISTINCT State_ut FROM doctor";
$result=$conn->query($sql);

echo"<select name='state' onchange='js_city();fd_show_list()' id='state' style='width:32%'>
  <option value=''>SELECT</option>";
while($row = $result->fetch_assoc()) {
     echo "<option value='".$row["State_ut"]."'>".$row["State_ut"]."</option>";
    }
 echo "</select>";

$conn->close();
?>


<span id="hh">
  &nbsp&nbspCITY:
  <select name='city' onchange='fd_show_list()' id='city' style='width:30%;'>
    <option value="">SELECT</option>
  </select>
</span>
<br><br>SPECIALIST:
<select name='specialist' onchange='fd_show_list()' id='specialist'>
  <option value="">SELECT</option>
  <option value="Audiologist">Audiologist</option>
  <option value="Allergist">Allergist</option>
  <option value="Cardiologist">Cardiologist</option>
  <option value="Dentist">Dentist</option>
  <option value="Dermatologist">Dermatologist</option>
  <option value="Endocrinologist">Endocrinologist</option>
  <option value="ENT Specialist">ENT Specialist</option>
  <option value="Gynecologist">Gynecologist</option>
  <option value="Immunologist">Immunologist</option>
  <option value="Medial Genetics">Medival Genetic</option>
  <option value="Miscellaneous">Miscellaneous</option>
  <option value="Neonatologist">Neonatologist</option>
  <option value="Neurologist">Neurologist</option>
  <option value="Oncologist">Oncologist</optio>
  <option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
  <option value="Pediatrician">Pediatrician</option>
  <option value="Physiologist">Physiologist</option>
  <option value="Podiatrist">Podiatrist</option>
  <option value="Psychiatrist">Psychiatrist</option>
  <option value="Urologist">Urologist</option>
  <option value="dentist">Dentist</option>
</select>
</center>
<br><br>
<div id="fd_list"><center>Select STATE,CITY and  SPECIALIST</center></div>
<br><br>

<script type="text/javascript">


   function js_city()
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
                document.getElementById("hh").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","city_list.php?state="+document.getElementById('state').value,true);
      xmlhttp.send(); 
    }

 function fd_show_list()
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
                document.getElementById("fd_list").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","fd_show_list.php?state="+document.getElementById('state').value+"&city="+document.getElementById('city').value+"&specialist="+document.getElementById('specialist').value,true);
      xmlhttp.send(); 
    }


  
</script>


      </div>

    <!-- End Middle Column -->
    </div>
   <br>





  <!-------------------------BLOOD SUGAR MONITORING--------------------->   
   
      <div class="w3-container w3-card w3-round w3-margin"  style="position:relative;left:10%;width:60%;background-color:  rgba(255, 255, 255, 0.65);color:black" id=blood_sugar><br>
                <form method="post" action="sub4.php">
        <img src="sugar_lvl.jpg" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:10%;">
        <h2 align="center">Sugar Level</h2>
        <hr class="w3-clear">
        <div style="position:relative;" align='center'><span style="font-size:140%;">Blood Sugar Level:  </span><input type="text" name="sugar" style="border-left:none;border-right:none;border-top:none;width:20%;position:relative;font-size:120%;" placeholder="in mg/dL" required></div><br>
        <div style="position:relative;" align="center"><span style="font-size:140%;">Date:  </span><input required type="text" style="border-left:none;border-right:none;border-top:none;width:5%;position:relative;font-size:120%;" name="dd" placeholder="DD"><span style="font-size:140%;"> / </span> <input required type="text" style="border-left:none;border-right:none;border-top:none;width:6%;position:relative;font-size:120%;" name="MM" placeholder="MM"><span style="font-size:140%;"> / </span> <input required type="text" style="border-left:none;border-right:none;border-top:none;width:12%;position:relative;font-size:120%;" name="yy" placeholder="YYYY">
          <span style="font-size:140%;">Time-  </span><input type="text" required name="hh" placeholder="HH" style="border-left:none;border-right:none;border-top:none;width:5%;font-size:120%;position:relative;"><span style="font-size:140%;"> : </span><input required type="text" placeholder="MM" name="mm" style="border-left:none;border-right:none;border-top:none;width:5.5%;font-size:120%;"></div>
          <center>
        <button class="w3-button  w3-margin-bottom" style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;position:relative;margin-top:7%;border-radius:20px;font-size:20px;"><i class="fa fa-send-o" ></i>Submit</button></center>
        </form><br>
      </div>
      <br>
 <!------------------------------UPLOAD REPORTS----------------------------->

      <div class="w3-container w3-card w3-round w3-margin"  style="position:relative;left:10%;width:60%;background-color:  rgba(255, 255, 255, 0.65);color:black" id="upload_reports"><br>
        <img src="upload.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:8%">
        <h2 align="center">UPLOAD REPORTS</h2>
        <hr class="w3-clear">
        <form action="upload1.php"  method="post" enctype="multipart/form-data" style="font-size: 130%;">
          <div style="position:relative;margin-left:13%"> 
           SELECT REPORT TO BE UPLOADED : &nbsp
           
           <input type="file" name="UploadFileField" id="fileToUpload" style="width:15%"><br><br></div>
           <center>
           DATE OF REPORT:<input type="text" name="day"  style="text-align: center;border-left:none;border-right:none;border-top:none;width:5%;position:relative;" placeholder="DD" required>/           
           <input type="text" name="month"  style="text-align: center;border-left:none;border-right:none;border-top:none;width:6%;position:relative;" placeholder="MM" required>/ 
           <input type="text" name="year"  style="text-align: center;border-left:none;border-right:none;border-top:none;width:12%;position:relative;" placeholder="YYYY" required><br><br>
           TEST NAME:<input type="text" name="test_name" id="test_name" required><br>
           <button class="w3-button  w3-margin-bottom" style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;position:relative;margin-top:7%;border-radius:20px;font-size:20px;"><i class="fa fa-arrow-up" ></i>Upload Reports</button>
          </center>
        </form>
        <br><br>
      </div>


<br>

       <div class="w3-container w3-card w3-round w3-margin" style="width:60%;position:relative;left:10%;background-color:  rgba(255, 255, 255, 0.65);color:black"id="lab_list"><br>
        <img src="lab_list.png" style="width:60px;float: left">
        
        <h2 align="center">MEDICAL LAB LIST</h4><br>
        <hr class="w3-clear"> 
 
<center style="font-size: 150%">
        STATE:

<?php
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT DISTINCT state FROM lab_list";
$result=$conn->query($sql);

echo"<select name='state' onchange='js_city1();fd_show_list1()' id='state1' style='width:32%'>
  <option value=''>SELECT</option>";
while($row = $result->fetch_assoc()) {
     echo "<option value='".$row["state"]."'>".$row["state"]."</option>";
    }
 echo "</select>";

$conn->close();
?>


<span id="hh1">
  &nbsp&nbspCITY:
  <select name='city' onchange='fd_show_list1()' id='city1' style='width:30%;'>
    <option value="">SELECT</option>
  </select>
</span>
</center>
<br><br>
<div id="fd_list1"><center>Select STATE and CITY</center></div>
<br><br>

<script type="text/javascript">


   function js_city1()
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
                document.getElementById("hh1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","city_list1.php?state="+document.getElementById('state1').value,true);
      xmlhttp.send(); 
    }

 function fd_show_list1()
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
                document.getElementById("fd_list1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","fd_show_list1.php?state="+document.getElementById('state1').value+"&city="+document.getElementById('city1').value,true);
      xmlhttp.send(); 
    }


  
</script>





<br>    
      </div> 
     
    <!-- Right Column -->
  <!-- End Grid -->
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
var chart1 = new CanvasJS.Chart("bloodpressure",{
  animationEnabled:true,
  zoomEnabled:true,
    title: {
    text: "Blood Pressure"
  },
  axisX: {
    valueFormatString: "hhTT DD MMM",
    labelAngle: -45,
  },
  axisY2: {
    gridThickness: 0.3,
      stripLines:[
    {                
      startValue:60,
      endValue:90,                
      color:"white"           
    },
        {
        startValue:140,
      endValue:90,
      color:"white"
        }
      ],
    suffix: "mmHg",
        interval: 30,
      gridColor: "black",
      minimum:20,
      maximum:180,
  },
  toolTip: {
    shared: true
  },
  legend: {
    cursor: "pointer",
    verticalAlign: "top",
    horizontalAlign: "center",
    dockInsidePlotArea: true,
  },
  data: [{
    type:"line",
    axisYType: "secondary",
    name: "Systolic",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###mmHg",
    dataPoints: [
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "sarthak2007";
      $dbname = "SOC";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
          
      $result = mysqli_query($conn, "SELECT * FROM A_".$_SESSION['Aadhar']);
          
      while($row = mysqli_fetch_array($result))
      {
        if(empty($row["Blood_Pressure"])) continue;
        
        echo "{x: new Date('".$row["Date"]."'), y:".$row["Blood_Pressure"]." },";
      }
    ?>
    ]
  },
  {
    type: "line",
    axisYType: "secondary",
    name: "Diastolic",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###mmHg",
    dataPoints: [
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "sarthak2007";
      $dbname = "SOC";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
          
      $result = mysqli_query($conn, "SELECT * FROM A_".$_SESSION['Aadhar']);
          
      while($row = mysqli_fetch_array($result))
      {
        if(empty($row["Blood_PressureD"])) continue;
        
        echo "{ x:new Date('".$row["Date"]."'), y:".$row["Blood_PressureD"]."},";
      }
    ?>
    ]
  }]
});
var chart2 = new CanvasJS.Chart("sugarlevel",{
    animationEnabled:true,
    zoomEnabled:true,
    title: {
    text: "Sugar Level",
  },
  axisX: {
    valueFormatString: "hhTT DD MMM",
    labelAngle: -45,
  },
  axisY2: {
    gridThickness: 0.3,
      stripLines:[
    {                
      startValue:60,
      endValue:90,                
      color:"white"           
    },
        {
        startValue:140,
      endValue:90,
      color:"white"
        }
      ],
    suffix: "mmol/dL",
        interval: 50,
      gridColor: "black",
      minimum:0,
      maximum:300,
  },
  toolTip: {
    shared: true,
    cornerRadius:10,
    animationEnabled:true,
  },
  
  data: [{
    type:"spline",
    axisYType: "secondary",
    lineColor:"#E17101",
    name: "Sugar Level",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###mmol/dL",
    dataPoints: [
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "sarthak2007";
      $dbname = "SOC";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
          
      $result = mysqli_query($conn, "SELECT * FROM S_".$_SESSION['Aadhar']);
          
      while($row = mysqli_fetch_array($result))
      {
        if(empty($row["sugar"])) continue;
        
        echo "{x:new Date('".$row["date_time"]."'),y:".$row["sugar"]."},";
      }
    ?>  
    ]
  }]
});
 
chart1.render();
chart2.render();

</script>

</body>
</html>