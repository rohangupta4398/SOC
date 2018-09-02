<?php
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$state=$_GET['state'];

echo "&nbsp&nbspCITY:";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT DISTINCT city FROM lab_list WHERE state='".$state."'";

echo "<select name='city' onchange='fd_show_list1()' id='city1' style='width:30%'>";

$result=$conn->query($sql);
echo "<option value=''>SELECT</option>";
while($row = $result->fetch_assoc()) {
     echo "<option value='".$row["city"]."'>".$row["city"]."</option>";
    }
echo "</select>";
$conn->close();
return;
?>