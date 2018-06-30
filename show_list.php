<?php

$disease=$_GET['disease'];
$severity=$_GET['severity'];

$servername="localhost";
$username="root";
$password="";
$dbname="medhelp";

$conn=new mysqli($servername,$username,$password,$dbname);


if($disease=="" && $severity=="")
{
   $sql="SELECT * FROM xyz170635_curr";
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
    			<th>Date Admitted</th>
    			<th>Patient Name</th>
    			<th>Disease</th>
    			<th>Severity</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Patient_Name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Diagnosis"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Severity"]."</a></td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

elseif($disease=="" && $severity!="")
{
   $sql="SELECT * FROM xyz170635_curr WHERE Severity=".$severity;
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
    			<th>Date Admitted</th>
    			<th>Patient Name</th>
    			<th>Disease</th>
    			<th>Severity</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Patient_Name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Diagnosis"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Severity"]."</a></td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

elseif($disease!="" && $severity=="")
{
   $sql="SELECT * FROM xyz170635_curr WHERE Diagnosis='".$disease."'";
   $result=$conn->query($sql);
   echo"<table >
  			<tr>
     			<th>Date Admitted</th>
    			<th>Patient Name</th>
    			<th>Disease</th>
    			<th>Severity</th>
  			</tr>";
while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Patient_Name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Diagnosis"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Severity"]."</a></td>
  </tr>";

  }  
 echo "</table>";

$conn->close();

return;
}

else
{
   $sql="SELECT * FROM xyz170635_curr WHERE Diagnosis='".$disease."' AND Severity=".$severity;
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
     echo  "<tr>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Date"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Patient_Name"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Diagnosis"]."</a></td>
    <td><a href='adi.php?aadhar=".$row["AADHAR"]."'>".$row["Severity"]."</a></td>
  </tr>";

  }  
 echo "</table>";
}

else
 {
 	echo "NO PATEINT";
 }

$conn->close();

return;
}
?>