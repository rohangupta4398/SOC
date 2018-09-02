<?php
session_start();
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
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>



<body style="background-image:url('pic8.jpg');background-repeat:repeat-x;background-size: cover" class="w3-theme-l5">

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


 
     
    <div class="w3-row-padding w3-margin-bottom" style="position:relative;width:100%;left:40%;top:10%;">

    </div></div>
      <div class="w3-col m7">
    <div class="w3-container w3-card w3-white w3-round w3-margin"  style="position:relative;left:-10%;width:150%;"><br>
            <img src="rec.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:5%">
            <h1 align='center'>Medical History</h1>
            <hr class="w3-clear">
            <div style="position:relative;margin-top:5%;margin-left:25%;">
            <span style="font-size:200%;">Get History from:  </span><input type="text" style="left:0%;border-left:none;border-right:none;border-top:none;width:4%;position:relative;font-size:140%;text-align:middle;" placeholder="DD"><span style="font-size:140%;position:relative;left:0%"> / </span> <input type="text" style="left:0%;border-left:none;border-right:none;border-top:none;width:5%;position:relative;font-size:140%;text-align:middle;" placeholder="MM"><span style="font-size:140%;position:relative;left:0%;"> / </span> <input type="text" style="left:0%;border-left:none;border-right:none;border-top:none;width:8%;position:relative;font-size:140%;text-align:middle;" placeholder="YYYY"><span style="position:relative;font-size:140%;left:0%;">    to:   </span><input type="text" style="border-left:none;border-right:none;border-top:none;width:4%;position:relative;font-size:140%;text-align:middle;" placeholder="DD"><span style="font-size:140%;position:relative;"> / </span> <input type="text" style="border-left:none;border-right:none;border-top:none;width:5%;position:relative;font-size:140%;text-align:middle;" placeholder="MM"><span style="font-size:140%;position:relative;"> / </span> <input type="text" style="border-left:none;border-right:none;border-top:none;width:8%;position:relative;font-size:140%;text-align:middle;" placeholder="YYYY">
          </div><br><br>
          <div style="position:relative;left:5%;top:5%;" align="center">
            <span style="font-size:140%;">Disease:  </span><input type="text" style="left:0%;border-left:none;border-right:none;border-top:none;width:20%;position:relative;font-size:140%;" placeholder="Select your Disease">
          </div>
          <br><br>

      </div>
</div>
</div>
</div></body></html>

