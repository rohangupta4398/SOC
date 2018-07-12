<?php



$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT *FROM doctor WHERE State_ut='".$_REQUEST['state']."' and City='".$_REQUEST['city']."' and Specialist='".$_REQUEST['speciality']."'";



$result=$conn->query($sql);


echo "<table border='solid' style='font-size:80%'>";

echo "<tr>
 		<th>DOCTOR'S NAME</th>
      	<th>ADDRESS</th>
      	<th>CONTACT NUMBER</th>
      </tr>";
while($row=$result->fetch_assoc())
  echo "<tr>
 			<td><input type='radio' name='doctor' value='".$row['LicenseID']."'>".$row['Name']."</td>
        	<td>".$row['Address']."</td>
        	<td>".$row['ContactNo']."</td>
        </tr>";
echo "</table>";

$conn->close();
?>
