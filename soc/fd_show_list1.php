<?php
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$state=$_GET['state'];
$city=$_GET['city'];

$conn=new mysqli($servername,$username,$password,$dbname);

if($state=="" && $city=="" )
{
	echo "<center>";
	echo "Select STATE and CITY";
	$conn->close();
}

else if($state=="" && $city!="" )
{
	echo "<center>";
	echo "Select STATE";
	$conn->close();
}

else if($state!="" && $city=="")
{
	echo "<center>";
	echo "Select CITY";
	$conn->close();
}


else if($state!="" && $city!="")
{
	$sql="SELECT * FROM lab_list WHERE state='".$state."'and city='".$city."'";
	$result=$conn->query($sql);
	echo "<table>
	        <th>Lab Name</th>
	        <th>Address</th>
	        <th>Contact Number</th>
	        <th>Timings</th>";
	while($row = $result->fetch_assoc()) {
     echo  "<tr>
    <td>".$row["lab_name"]."</td>
    <td>".$row["address"]."</td>
    <td>".$row["conatact_no"]."</td>
    <td>".$row["timings"]."</td>
     </tr>";

  	}  
 	echo "</table>";

	$conn->close();
}



?>