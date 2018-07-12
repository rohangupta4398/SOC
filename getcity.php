<?php

$servername="localhost";
$username="root";
$password="";
$dbname="soc";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT DISTINCT City FROM doctor WHERE State_ut='".$_REQUEST['state']."'";
$result=$conn->query($sql);


echo "SELECT CITY:";

echo "<select name='city' id='city' onchange='showspeciality()'>";
echo "<option value=''></option>";
while($row=$result->fetch_assoc())
  echo "<option value='".$row['City']."'>".$row['City']."</option>";
echo "</select>";

$conn->close();
?>
