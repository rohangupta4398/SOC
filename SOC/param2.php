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
</style>


<!-----------------------------------------------------------------------MAIN BODY---------------------------------------------------------------------------------------------------->


<body style="background-image:url('pic8.jpg');background-repeat:repeat;background-size: cover" class="w3-theme-l5">

<!---------------- Navigational-bar ----------------->

<div class="w3-top">
 <div style="background-color: #35353F" class="w3-bar w3-left-align w3-large">
  <a href="final.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5" style="text-decoration: none"><i class="fa fa-home w3-margin-right"></i>HOME</a>
    <a href="medorad.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5" style="text-decoration: none"><b>MEDORA</span></b></a>
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

<!------------------------------------------GRAPHS------------------------------------------->

  <div id="bloodpressure" style="position:fixed;top:70px;right:30px;width:620px;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <div id="sugarlevel" style="position:fixed;top:500px;right:30px;width:620px;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 

    <!-- End Left Column -->
    </div>

<!--------------------------------------------------------------------------DIVISIONS FOR MAIN PART----------------------------------------------------------------------------------->

  <!------------------------------HISTORY PART------------------------------->

    <div class="w3-col m7">
      
      
  <!-------------------------REFER IT TO ANOTHER DOCTOR--------------------->   
   
      <div class="w3-container w3-card w3-white w3-round w3-margin"  style="position:relative;left:-10%;width:80%;" id="refer"><br>
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
          <br>
          <input type="button" style="width: 25%;font-size: 130%" id="s1" value="SUBMIT" onclick='ref();'>
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
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"  style="position:relative;left:-10%;width:80%;" id="add"><br>
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
          DIAGNOSIS: <input type="text" id='5' name="disgnosis"><br>
          <br>
          <input type="button" style="width: 25%;font-size: 130%" id="s2" value="ADD" onclick='add();'>
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

<?php

// echo "window.onload = function () {";
// echo "var chart1 = new CanvasJS.Chart('bloodpressure',{";
//   // theme: "light2",
// echo  "animationEnabled: true,";
// echo "zoomEnabled: true,";
// echo "title: {";
// echo "text: 'Blood Pressure'";
// echo "},";
// echo "axisX: {"."valueFormatString: 'MMM YYYY'"."  },";
// echo "axisY2: {gridThickness: 0.3,";
// echo "suffix: 'mmHg',"."interval: 30,"."gridColor: 'black',"."minimum:20,"."maximum:180,"."},";
// echo "toolTip: {"."shared: true"."},"."legend: {"."cursor: 'pointer',"."verticalAlign: 'top',"."horizontalAlign: 'center',"."dockInsidePlotArea: true,"."},";
// echo "data: [{ type:'line',axisYType: 'secondary',name: 'Diastolic',showInLegend: true,markerSize: 0,yValueFormatString: '#,###mmHg',dataPoints: [";
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

$sql = "SELECT *FROM XYZ170635_sugar_level ORDER BY date_time ASC";
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