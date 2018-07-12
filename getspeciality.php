<?php



$servername="localhost";
$username="root";
$password="";
$dbname="soc";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT DISTINCT Specialist FROM doctor WHERE State_ut='".$_REQUEST['state']."' and City='".$_REQUEST['city']."'";



$result=$conn->query($sql);


echo "SELECT CITY:";

echo "<select name='speciality' id='speciality' onchange='showspeciality()'>";
while($row=$result->fetch_assoc())
  echo "<option value='".$row['Specialist']."'>".$row['Specialist']."</option>";
echo "</select>";

$conn->close();
?>
