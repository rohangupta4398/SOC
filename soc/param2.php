<?php
session_start();
if(!isset($_SESSION['LicenseID']))
  header('Location:as_doc.php');
if(!isset($_SESSION['a']))
  header('Location:final.php');
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
$Aadhar=$_SESSION['a'];
$sql = "SELECT * FROM patient where AADHAR='".$Aadhar."'";
//else echo 0;
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<title>New Patient page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" type="image/png" href="medhelp blue.png">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.w3-container[type=button]:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

/*body {
    background-image: url("bkg2e.jpg");
    background-repeat: repeat-x;
    background-size: 100% 100%;
}*/

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
body { 
  background: url(bkgf.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>


<!-----------------------------------------------------------------------MAIN BODY---------------------------------------------------------------------------------------------------->


<body >

<!---------------- Navigational-bar ----------------->

<div class="w3-top">
 <div style="background-color: #35353F" class="w3-bar w3-left-align w3-large">
  <span style='position: relative;height: 100%;width: 3%;float: left;vertical-align: middle;'><a href='login_page.php' class="w3-bar-item w3-padding-large w3-theme-d5 w3-left" style="position: relative;text-decoration: none;width: 20%;vertical-align: middle;"><img src='medhelp blue.png' style='height: 22px;width: 22px;float: left;vertical-align: middle;margin-top:4px 
    '></span></a>
  <a href="final.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5" style="text-decoration: none"><i class="fa fa-home w3-margin-right"></i>HOME</a>
    <a href="medorad.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5" style="text-decoration: none"><b>MEDORA</span></b></a>
    <a href="history2.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5" style="text-decoration: none"><b>MEDICAL HISTORY</span></b></a>
    <a href="as_doc.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-right w3-theme-d5" style="text-decoration: none"><i class="fa fa-sign-out w3-margin-right" ></i>LOGOUT</a>
   </div>
</div>

<!--xxxxxxx  navigational bar  xxxxxxxxxxxxxxxxxxx-->


<div class="w3-container w3-content" style="max-width:1400px;margin-top:60px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">

 <!------------------------------------- Profile of patient------------------------------------------>

      <div class="w3-card w3-round" style="left:80px;top:90px;width:20%;position:fixed;background-color:  rgba(255, 255, 255, 0.65);color:black" type>
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

<!------------------------------------------GRAPHS------------------------------------------->

  <div class="w3-container w3-card w3-white w3-round w3-margin" id="bloodpressure" style="position:fixed;top:6.5%;right:1%;width:33%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <div class="w3-container w3-card w3-white w3-round w3-margin" id="sugarlevel" style="position:fixed;top:50%;right:1%;width:33%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 

    <!-- End Left Column -->
    </div>

<!--------------------------------------------------------------------------DIVISIONS FOR MAIN PART----------------------------------------------------------------------------------->

  <!------------------------------HISTORY PART------------------------------->

    <div class="w3-col m7">
      
      
  <!-------------------------REFER IT TO ANOTHER DOCTOR--------------------->   
   
      <div class="w3-container w3-card w3-round w3-margin"  style="position:relative;left:-10%;width:80%;top:20%;;background-color:  rgba(255, 255, 255, 0.65);color:black" id="refer"><br>
        <img src="referred_patient.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:10%">
        <h2 align="center">REFER TO ANOTHER DOCTOR</h2>
        <hr class="w3-clear">
        <form action="refer.php" method="post" name='re' style="font-size: 130%">
          <br>
          <center>
          <span id='3' style="color: red;display: none;"></span>
          <br>
          LICENSE ID: <input type="text" id='1' name="doc"><br>
          <br>
          COMMENTS: <input type="text" id='2' name="comments"><br>
          <button type="button" class="w3-button  w3-margin-bottom" style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;position:relative;margin-top:7%;border-radius:20px;font-size:20px;" id="s1"  onclick='ref();'><i class="fa fa-send-o" ></i>Submit</button>
          <br><br>
         </center>
        </form>
      </div>
      <script>
        function ref(){
          var xml=new XMLHttpRequest();
          var a=document.getElementById('1').value.trim();
          var b=document.getElementById('2').value.trim();
          if(a=="" && b==""){
            document.getElementById('3').innerHTML="*Please fill the LicenseID and Comments<br>";
            document.getElementById('3').style.display='block';
            return;
          }
          else if(a==""){
            document.getElementById('3').innerHTML="*Please fill the LicenseID.";
            document.getElementById('3').style.display='block';
            return;
          }
          else if(b==""){
            document.getElementById('3').innerHTML="*Please fill the Comments";
            document.getElementById('3').style.display='block';
            return;
          }
          xml.onreadystatechange=function(){

            if(this.readyState==4 && this.status==200){
              
              if(this.responseText==1){
                //document.write('//2');
                //document.getElementById('3').innerHTML=this.responseText;
                document.getElementById('3').innerHTML="*Please fill valid LicenseID";
                //document.getElementById('3').style.display=inline-block;
              }
              if(this.responseText==2){

                //header("Location: doctor_login1.php");
                document.forms["re"].submit();
              }
            }

          };
          xml.open("POST","param2checklic.php?firstname="+a,true);
          xml.send();
        }
      </script>

  <!---------------------ADD TO CURRENT PATIENT LIST---------------->
      
      <div class="w3-container w3-card w3-round w3-margin"  style="position:relative;left:-10%;width:80%;;background-color:  rgba(255, 255, 255, 0.65);color:black" id="add"><br>
        <img src="new_patient2png.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:10%">
        <h2 align="center">ADD TO CURRENT PATIENTS</h2>
        <hr class="w3-clear">
        <form action="add_current.php" method="post" name='ad' style="font-size: 130%">
          <br>
          <center>
            <span id='6' style="color: red;display: none;"></span><br>
          SEVERITY: <select name="severity" id='4' style="width:47%">
                    <option value=''>Select Severity</option>            
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                  </select>
          <br><br>
          SYMPTOMS: <input type="text" id='7' name="symptoms">
          <br><br>
          DIAGNOSIS: <input type="text" id='5' name="disgnosis">
          <br>
          <button type="button" class="w3-button  w3-margin-bottom" style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;position:relative;margin-top:7%;border-radius:20px;font-size:20px;" id="s2" onclick='add();'><i class="fa fa-plus" ></i>&nbspAdd</button>
          <br><br>
         </center>
        </form>
      </div>
      <script>
        function add(){
          var xml=new XMLHttpRequest();
          var a=document.getElementById('4').value.trim();
          var b=document.getElementById('5').value.trim();
          var c=document.getElementById('7').value.trim();
          if(a=="" && b=="" && c==""){
            document.getElementById('6').innerHTML="*Please fill the details<br>";
            document.getElementById('6').style.display='block';
            return;
          }
          else if(a=="" && c==""){
            document.getElementById('6').innerHTML="*Please select Severity and fill the Symptoms";
            document.getElementById('6').style.display='block';
            return;
          }
          else if(a==""){
            document.getElementById('6').innerHTML="*Please select Severity";
            document.getElementById('6').style.display='block';
            return;
          }
          else if(c==""){
            document.getElementById('6').innerHTML="*Please fill the Symptoms";
            document.getElementById('6').style.display='block';
            return;
          }
          document.forms["ad"].submit();
        }
      </script>
    <!-- End Middle Column -->
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
          
      $result = mysqli_query($conn, "SELECT * FROM A_".$_SESSION['a']);
          
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
          
      $result = mysqli_query($conn, "SELECT * FROM A_".$_SESSION['a']);
          
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
          
      $result = mysqli_query($conn, "SELECT * FROM S_".$_SESSION['a']." ORDER BY date_time ASC");
          
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