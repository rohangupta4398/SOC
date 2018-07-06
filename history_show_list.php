<?php

$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$diagnosis=$_POST['diagnosis'];

$conn=new mysqli($servername,$username,$password,$dbname);

if($diagnosis=='')
{


$sql="SELECT * FROM WHERE Date >= '".$sdate."' and Date <= '".$edate."' and Diagnosis='".$diagnosis;
$result=$conn->query($sql);
echo "<table>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medicine</th>
            <th>Test</th>
            <th>Repots</th>
            <th>Symptoms</th>
            <th>Diagnosis</th>
          </tr>";
$row=$result->fetch_assoc();


$diagnosis=$row['Diagnosis'];
echo "<td colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  echo "<td>".$row['Medicine']."</td>";
  echo "<td>".$row['Test']."</td>";
  echo "<td>".$row['Report']."</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";


while($row=$result->fetch_assoc()){
  if ($diagnosis==$row['Diagnosis']){
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  echo "<td>".$row['Medicine']."</td>";
  echo "<td>".$row['Test']."</td>";
  echo "<td>".$row['Report']."</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
  
}
 else{
  $diagnosis=$row['Diagnosis'];
  echo "<td colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  echo "<td>".$row['Medicine']."</td>";
  echo "<td>".$row['Test']."</td>";
  echo "<td>".$row['Report']."</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
 }
}

echo "</table>";

$conn->close();
}


else
{


$sql="SELECT * FROM WHERE Date >= '".$sdate."' and Date <= '".$edate."'";
$result=$conn->query($sql);
echo "<table>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medicine</th>
            <th>Test</th>
            <th>Repots</th>
            <th>Symptoms</th>
            <th>Diagnosis</th>
          </tr>";
$row=$result->fetch_assoc();


$diagnosis=$row['Diagnosis'];
echo "<td colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  echo "<td>".$row['Medicine']."</td>";
  echo "<td>".$row['Test']."</td>";
  echo "<td>".$row['Report']."</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";


while($row=$result->fetch_assoc()){
  if ($diagnosis==$row['Diagnosis']){
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  echo "<td>".$row['Medicine']."</td>";
  echo "<td>".$row['Test']."</td>";
  echo "<td>".$row['Report']."</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
  
}
 else{
  $diagnosis=$row['Diagnosis'];
  echo "<td colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  echo "<td>".$row['Medicine']."</td>";
  echo "<td>".$row['Test']."</td>";
  echo "<td>".$row['Report']."</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
 }
}

echo "</table>";

$conn->close();
}
?>