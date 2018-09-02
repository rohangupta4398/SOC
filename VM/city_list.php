<?php
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$state=$_GET['state'];

echo "&nbsp&nbspCITY:";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT DISTINCT City FROM doctor WHERE State_ut='".$state."'";

echo "<select name='city' onchange='fd_show_list()' id='city' style='width:30%'>";

$result=$conn->query($sql);
echo "<option value=''>SELECT</option>";
while($row = $result->fetch_assoc()) {
     echo "<option value='".$row["City"]."'>".$row["City"]."</option>";
    }
echo "</select>";
$conn->close();
return;
?>