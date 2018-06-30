<?php

$doctor=$_GET['doctor'];

$servername="localhost";
$username="root";
$password="";
$dbname="medhelp";

$conn=new mysqli($servername,$username,$password,$dbname);


if($doctor=="" )
{
   $sql="SELECT * FROM xyz170635_referred";
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
    			<th>Date Referred</th>
    			<th>Patient Name</th>
    			<th>Comments</th>
    			<th>Doctor</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Patient_name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Comments"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Doctor"]."</a></td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

else
{
   $sql="SELECT * FROM xyz170635_referred"." WHERE Doctor='".$doctor."' ORDER BY Patient_name ASC";
   $result=$conn->query($sql);
   echo"<table >
        <tr>
          <th>Date Referred</th>
          <th>Patient Name</th>
          <th>Comments</th>
          <th>Doctor</th>
        </tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Patient_name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Comments"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["Aadhar"]."'>".$row["Doctor"]."</a></td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}


?>