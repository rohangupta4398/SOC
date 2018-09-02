<?php
session_start();
$disease=$_REQUEST['disease'];
$severity=$_REQUEST['severity'];
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$b=$_SESSION['LicenseID'];
$conn=new mysqli($servername,$username,$password,$dbname);


if($disease=="" && $severity=="")
{

   $sql="SELECT * FROM ".$b."_curr ";
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
    			<th>Date Admitted</th>
    			<th>Patient Name</th>
    			<th>Disease</th>
    			<th>Severity</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr onclick='add(".$row["AADHAR"].");'>
    <td >".$row["Date"]."</td>
    <td>".$row["Patient_Name"]."</td>
    <td>".$row["Diagnosis"]."</td>
    <td>".$row["Severity"]."</td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

if($disease=="" && $severity!="")
{
  
   $sql="SELECT * FROM ".$b."_curr WHERE Severity='".$severity."'";
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
    			<th>Date Admitted</th>
    			<th>Patient Name</th>
    			<th>Disease</th>
    			<th>Severity</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr onclick='add(".$row["AADHAR"].");'>
    <td >".$row["Date"]."</td>
    <td>".$row["Patient_Name"]."</td>
    <td>".$row["Diagnosis"]."</td>
    <td>".$row["Severity"]."</td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

elseif($disease!="" && $severity=="")
{
   $sql="SELECT * FROM ".$b."_curr WHERE Diagnosis='".$disease."'";
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
     			<th>Date Admitted</th>
    			<th>Patient Name</th>
    			<th>Disease</th>
    			<th>Severity</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr onclick='add(".$row["AADHAR"].");'>
    <td >".$row["Date"]."</td>
    <td>".$row["Patient_Name"]."</td>
    <td>".$row["Diagnosis"]."</td>
    <td>".$row["Severity"]."</td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

else
{
   $sql="SELECT * FROM ".$b."_curr WHERE Diagnosis='".$disease."' AND Severity=".$severity;
   $result=$conn->query($sql);

if ($result->num_rows > 0) {
   echo"<table >
  			<tr>
     			<th>Date Admitted</th>
    			<th>Patient Name</th>
    			<th>Disease</th>
    			<th>Severity</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr onclick='add(".$row["AADHAR"].");'>
    <td >".$row["Date"]."</td>
    <td>".$row["Patient_Name"]."</td>
    <td>".$row["Diagnosis"]."</td>
    <td>".$row["Severity"]."</td>
  </tr>";

  }  
 echo "</table>";
}

else
 {
 	echo "<center>NO PATIENT</center>";
 }

$conn->close();

return;
}
?>