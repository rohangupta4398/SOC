<?php
session_start();
$doctor=$_REQUEST['doctor'];

$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$b=$_SESSION['LicenseID'];
$conn=new mysqli($servername,$username,$password,$dbname);


if($doctor=="" )
{
   $sql="SELECT * FROM ".$b."_referred ORDER BY Patient_Name ASC";
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
    			<th>Date Referred</th>
    			<th>Patient Name</th>
    			<th>Comments</th>
    			<th>Doctor</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
      echo  "<tr onclick='refer(".$row["Aadhar"].");'>
    <td >".$row["Date"]."</td>
    <td>".$row["Patient_Name"]."</td>
    <td>".$row["Comments"]."</td>
    <td>".$row["Doctor"]."</td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

else
{
   $sql="SELECT * FROM ".$b."_referred"." WHERE Doctor='".$doctor."' ORDER BY Patient_name ASC";
   $result=$conn->query($sql);
   echo"<table >
        <tr>
          <th>Date Referred</th>
          <th>Patient Name</th>
          <th>Comments</th>
          <th>Doctor</th>
        </tr>";
while($row = $result->fetch_assoc()) {
      echo  "<tr onclick='refer(".$row["Aadhar"].");'>
    <td >".$row["Date"]."</td>
    <td>".$row["Patient_Name"]."</td>
    <td>".$row["Comments"]."</td>
    <td>".$row["Doctor"]."</td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}


?>