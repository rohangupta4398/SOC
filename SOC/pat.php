<?php
session_start();
if(!isset($_SESSION['aa']))
  header('Location:final.php');
// $adhar=$_SESSION['Aadhar'];
$adhar=$_SESSION['aa'];
$conn = new mysqli('localhost', 'root', 'sarthak2007', 'SOC');
//Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM patient where Aadhar=".$adhar;
$result=$conn->query($sql);
$row = mysqli_fetch_array($result);
?>



<!DOCTYPE html>
<html>
<title>MedHelp Patient Pag</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.w3-container[type=button]:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.qw
{

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

/*body {
    /*background-image: url("bkg2e.jpg");*/
  /*  background-repeat: repeat-x;
    background-size: 100% 100%;
}*/
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>



<body style="background-image:url('pic8.jpg');background-repeat:repeat;background-size:cover" class="w3-theme-l5">

<!------------------------------------------------------ Navbar--------------------------------------------------------->
<div class="w3-top">
 <div  class="w3-bar w3-theme-d5 w3-left-align w3-large">
  <a href="final.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5" style="text-decoration: none"><i class="fa fa-home w3-margin-right"></i>HOME</a>
    <a href="medorad.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5" style="text-decoration: none"><b>MEDORA</span></b></a>
    <a href="as_doc.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-right w3-theme-d5" style="text-decoration: none"><i class="fa fa-sign-out w3-margin-right" ></i>LOGOUT</a>
    <a href="pat.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5" style="text-decoration: none">PRESCRIBE</span></a>
    <a href="history.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5" style="text-decoration: none">MEDICAL HISTORY</span></a>
    <a href="sub3.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5" style="text-decoration: none">CLOSE CURRENT CASE</span></a>

 </div>
</div>
<!----------xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx------------------------------------------------->

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

-------->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:60px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!------------------------------ Profile --------------------------------------------------------------->
      <div class="w3-card w3-round w3-white" style="left:80px;top:90px;width:20%;position:fixed" type>
        <div class="w3-container">
         <h2 class="w3-center"><b>Patient's Profile</b></h2>
         <p class="w3-center"><img src="<?php echo $row['image']; ?>" class="w3-circle" style="height:150px;width:110px;" alt="Avatar"></p>
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
      <div class="w3-card w3-round w3-white" style="margin-left:-8.6%;margin-top:28%;width:20%;position:fixed" type>
        <div class="w3-container">
         <h2 class="w3-center"><b>Update Severity</b></h2>
         <hr class="w3-clear">
         <center><form action='updateseverity.php' name='sev'  method='post' style="font-size: 22px">
          <center>
        <span id='6' style="color: red;font-size:72%"></span></center>
         SEVERITY: <select name='Severity' id='5'>
            <option value=''>Select Severity</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
          </select>
          <br><br>
          <input type='button' onclick='g();' value='UPDATE' style='position:relative;background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration:none;
border-radius:20px;'><br>
          </form></center><br><br>
        </div>
      </div>
      <br>
      <script>
        function g(){
          var a=document.getElementById('5').value;
          if(a==""){
            document.getElementById('6').innerHTML="*Please select severity";
          }
          else{
            document.forms["sev"].submit();
          }
        }
      </script>
     <!------------------------XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-------------->
     <!---------------------BLOOD PRESSURE GRAPH---------------------------------->

     <div class="w3-container w3-card w3-white w3-round w3-margin" id="chartContainer" style="position:fixed;top:80px;right:20px;width:620px;"></div>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   
      <!-----------------------SUGAR LEVEL GRAPH---------------------------------->
      
      

<!--------------------------NAVIGATION_PART--------------------------------------------------->
      <div class="w3-row-padding w3-margin-bottom" style="position:absolute;width:1100px;left:365px;top:70px;">

<!------------------------------UPDATE INFO-------------------------------------------------------------->
    

    <!---------------------------PRESCRIPTIONS------------------------------------------------------>
  

    
<!------------------------------------------------CLOSED CASE---------------------------------------->    
    
  </div>
    
    <!-- End Left Column -->
    </div>
<!---XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-------------------------------->
    
<!---------------------Prescription FORM------------------------------------------>    
    <div class="w3-col m7">
      <div class="w3-container w3-card w3-white w3-round w3-margin" style="position:relative;left:-10%;width:80%;"><br>
        <img src="med.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:10%">
        <h2>Prescriptions</h2>
        <hr class="w3-clear">
        <form method="post" action="sub1.php" name='pre'>
        <center>
        <span id='3' style="color: red;"></span></center>
        <div><pp>Medicines:</pp><input type="text" name="meds" style="position:relative;left:7%;width:70%;"></div>
        
        <div style="display:block;"><pp>Tests:</pp><input type="text" name="tests" style="position:relative;left:12.5%;width:70%;"></div>
        
        <div><span style='color:red;position:relative;left:-1%'  >*</span><pp>Symptoms:</pp><input type="text" id='1' name="symptoms" style="position:relative;left:5%;width:70%;vertical-align:middle;"></div><br>
        
        <div><pp>Blood Pressure:</pp><pp style="position:relative;left:20px;">Systolic:</pp><input type="text" name="systolic" placeholder="in mmHg" style="position:relative;left:25px;width:87px;vertical-align:middle;">
        
        <pp style="position:relative;left:60px;">Diastolic:</pp><input type="text" name="diastolic" placeholder="in mmHg" style="position:relative;left:65px;width:87px;vertical-align:middle;"></div><br>
        
        <div><pp>Diagnosis:</pp><input type="text" name="diagnosis" style="position:relative;left:40px;width:422px;vertical-align:middle;"></div>
        <br><br>
        <center>
        <button type='button' onclick='f();' style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration:none;position:relative;border-radius:20px;font-size:20px;"><i class="fa fa-send-o" ></i> Submit</button></center>
      </form>
      <br><br>
      </div>
      <script>
        function f(){
          var a=document.getElementById('1').value.trim();
          if(a==""){
            document.getElementById('3').innerHTML="*Please fill the Symptoms";
          }
          else{
            document.forms["pre"].submit();
          }
        }
      </script>


      <div class="w3-container w3-card w3-white w3-round w3-margin"  style="position:relative;left:-10%;width:80%;">
      <br>
        <form method="post" action="sub2.php">
        <img src="sugar.png" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:10%;">
        <h2>Sugar Level</h2>
        <hr class="w3-clear">
        <div style="position:relative;" align='center'><span style="font-size:140%;">Blood Sugar Level:  </span><input type="text" name="sugar" style="border-left:none;border-right:none;border-top:none;width:20%;position:relative;font-size:120%;" placeholder="in mg/dL"></div><br>
        <div style="position:relative;" align="center"><span style="font-size:140%;">Date:  </span><input type="text" style="border-left:none;border-right:none;border-top:none;width:5%;position:relative;font-size:120%;" name="dd" placeholder="DD"><span style="font-size:140%;"> / </span> <input type="text" style="border-left:none;border-right:none;border-top:none;width:6%;position:relative;font-size:120%;" name="MM" placeholder="MM"><span style="font-size:140%;"> / </span> <input type="text" style="border-left:none;border-right:none;border-top:none;width:12%;position:relative;font-size:120%;" name="yy" placeholder="YYYY">
          <span style="font-size:140%;">Time:  </span><input type="text" name="hh" placeholder="HH" style="border-left:none;border-right:none;border-top:none;width:5%;font-size:120%;position:relative;"><span style="font-size:140%;"> / </span><input type="text" placeholder="MM" name="mm" style="border-left:none;border-right:none;border-top:none;width:5.5%;font-size:120%;"></div>
          <center>
        <button style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;position:relative;margin-top:7%;border-radius:20px;font-size:20px;"><i class="fa fa-send-o" ></i>Submit</button></center>
        
      </form>
      <br><br>
      </div>









      <!--------------------------------------GET HISTORY---------------------------------------------------->

      
<!------------------------------------SUGAR LEVEL INPUT------------------------------------------------>

      

<!---------------------------------UPDATE CURR INFO------------------------------------------------>
      
     
    <!-- End Middle Column -->
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Right Column -->
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!--------------------------------------------CONTACT FOR MORE INFORMATION-------------------------------->

<!----------------------------------------------GRAPH_BACK_END------------------------------------------------>
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

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Simple Line Chart"
  },
  axisY:{
    includeZero: false
  },
  data: [{        
    type: "line",       
    dataPoints: [
      { y: 450 },
      { y: 414},
      { y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
      { y: 460 },
      { y: 450 },
      { y: 500 },
      { y: 480 },
      { y: 480 },
      { y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
      { y: 500 },
      { y: 480 },
      { y: 510 }
    ]
  }]
});
chart.render();

}
</script>

</body>
</html> 