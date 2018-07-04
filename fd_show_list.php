<?php
$servername="localhost";
$username="root";
$password="";
$dbname="medhelp";
$state=$_GET['state'];
$city=$_GET['city'];
$speciality=$_GET['specialist'];

$conn=new mysqli($servername,$username,$password,$dbname);

if($state=="" && $city==""  && $speciality=="")
{
	echo "<center>";
	echo "Select STATE,CITY and SPECIALITY";
	$conn->close();
}

else if($state=="" && $city==""  && $speciality!="")
{
	echo "<center>";
	echo "Select CITY and STATE";
	$conn->close();
}

else if($state=="" && $city!="" && $speciality!="")
{
	echo "<center>";
	echo "Select STATE";
	$conn->close();
}

else if($state=="" && $city!="" && $speciality=="")
{
	echo "<center>";
	echo "Select STATE and SPECIALITY";
	$conn->close();
}

else if($state!="" && $city=="" && $speciality=="")
{
	echo "<center>";
	echo "Select CITY and SPECIALITY";
	$conn->close();
}

else if($state!="" && $city!="" && $speciality=="")
{  
	echo "<center>";
	echo "Select SPECIALITY";
	$conn->close();
}


else if($state!="" && $city!="" && 	$speciality!="")
{
	$sql="SELECT * FROM doctor WHERE State_ut='".$state."'and City='".$city."'and Specialist='".$speciality."'";
	$result=$conn->query($sql);
	echo "<table>
	        <th>Doctor's Name</th>
	        <th>Address</th>
	        <th>Contact Number</th>
	        <th>Timings</th>";
	while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td>".$row["Name"]."</td>
    <td>".$row["Address"]."</td>
    <td>".$row["ContactNo"]."</td>
    <td>".$row["Timings"]."</td>
     </tr>";

  	}  
 	echo "</table>";

	$conn->close();
}

else 
{
	echo "Select CITY";
	$conn->close();
}



?>