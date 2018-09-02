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
<title>MedHelp Patient Pag</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="medhelp blue.png">
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
body { 
  background: url(bkgf.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>



<body>

<!------------------------------------------------------ Navbar--------------------------------------------------------->
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
     
    <div class="w3-row-padding w3-margin-bottom" style="position:relative;width:100%;left:40%;top:10%;">

    </div></div>
      <div class="w3-col m7">
        <div class="w3-container w3-card w3-round w3-margin"  style="position:relative;left:-10%;width:150%;background-color:  rgba(255, 255, 255, 0.65);color:black"><br>
            <img src="rec.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:5%">
            <h1 align='center'>Medical History</h1>
            <hr class="w3-clear">
            <div style="position:relative;margin-top:5%;margin-left:25%;">
            <form>
            <span style="font-size:200%;">Get History from:  </span>
            <input id='sd' type="text" style="left:0%;border-left:none;border-right:none;border-top:none;width:4%;position:relative;font-size:140%;text-align:middle;" placeholder="DD"><span style="font-size:140%;position:relative;left:0%"> / </span> 
            <input  id='sm' type="text" style="left:0%;border-left:none;border-right:none;border-top:none;width:5%;position:relative;font-size:140%;text-align:middle;" placeholder="MM"><span style="font-size:140%;position:relative;left:0%;"> / </span> 
            <input  id='sy' type="text" style="left:0%;border-left:none;border-right:none;border-top:none;width:8%;position:relative;font-size:140%;text-align:middle;" placeholder="YYYY"><span style="position:relative;font-size:140%;left:0%;">    to:   </span>
            <input  id='ed' type="text" style="border-left:none;border-right:none;border-top:none;width:4%;position:relative;font-size:140%;text-align:middle;" placeholder="DD"><span style="font-size:140%;position:relative;"> / </span>
             <input  id='em' type="text" style="border-left:none;border-right:none;border-top:none;width:5%;position:relative;font-size:140%;text-align:middle;" placeholder="MM"><span style="font-size:140%;position:relative;"> / </span> <input  id='ey' type="text" style="border-left:none;border-right:none;border-top:none;width:8%;position:relative;font-size:140%;text-align:middle;" placeholder="YYYY">
          </div><br><br>
          <div style="position:relative;left:5%;top:5%;" align="center">
            <span style="font-size:140%;">Disease:  </span>
            <?php
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT DISTINCT Diagnosis FROM A_".$_SESSION['Aadhar'];
$result=$conn->query($sql);
echo"<select name='doctor' id='disease'>
  <option value=''>Select a disease</option>";
while($row = $result->fetch_assoc()) {
     echo "<option value='".$row["Diagnosis"]."'>".$row["Diagnosis"]."</option>";
    }
 echo "</select>";
$conn->close();
?>           




          </div>
        
          
    
<script>
 function history_show_list()
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
        xmlhttp.open("POST","history_show_list1.php?sdate="+document.getElementById('sy').value+"-"+document.getElementById('sm').value+"-"+document.getElementById('sd').value+"&edate="+document.getElementById('ey').value+"-"+document.getElementById('em').value+"-"+document.getElementById('ed').value+"&doctor="+document.getElementById('disease').value,true);
      xmlhttp.send(); 
    }
</script>
<center>
<button type='button' onclick='history_show_list();' class="w3-button  w3-margin-bottom" style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;position:relative;margin-top:2%;border-radius:20px;font-size:20px;"><i class="fa fa-send-o" ></i>Submit</button></center>
          </CENTER>
        </form>
      <div id="txtHint">
        
<?php
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT * FROM A_".$_SESSION['Aadhar'];
$result=$conn->query($sql);
$row=$result->fetch_assoc();

if($result->num_rows !=0){
  echo "<table>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medicine</th>
            <th>Test</th>
            <th>Repots</th>
            <th>Symptoms</th>
          </tr>";
$diagnosis=$row['Diagnosis'];
echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";


while($row=$result->fetch_assoc()){
  if ($diagnosis==$row['Diagnosis']){
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
  
}
 else{
  $diagnosis=$row['Diagnosis'];
  echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
 }
}

echo "</table>";
}
else{
  echo "<table><td align='center'>NO RECORD FOUND</td></table>";
}

$conn->close();
?>

      </div>
</div>
</div>
</div></body></html>


