<?php

$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT DISTINCT City FROM doctor WHERE State_ut='".$_REQUEST['state']."'";
$result=$conn->query($sql);


echo "CITY:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

echo "<select name='city' id='city' onchange='showspeciality()' style='width:40%'>";
echo "<option value=''>Select City</option>";
while($row=$result->fetch_assoc())
  echo "<option value='".$row['City']."'>".$row['City']."</option>";
echo "</select>";

$conn->close();
?>
