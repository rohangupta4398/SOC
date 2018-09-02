<?php



$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT DISTINCT Specialist FROM doctor WHERE State_ut='".$_REQUEST['state']."' and City='".$_REQUEST['city']."'";



$result=$conn->query($sql);


echo "SPECIALIST:";

echo "<select name='speciality' id='speciality' onchange='showspeciality()' style='width:40%'>";
while($row=$result->fetch_assoc())
  echo "<option value='".$row['Specialist']."'>".$row['Specialist']."</option>";
echo "</select>";

$conn->close();
?>
