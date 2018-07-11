<?php
session_start();
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";
$sdate=$_REQUEST['sdate'];
$edate=$_REQUEST['edate'];
$diagnosis=$_REQUEST['doctor'];

$conn=new mysqli($servername,$username,$password,$dbname);

if($diagnosis!='' && $sdate=='--')
{


  $sql="SELECT * FROM A_".$_SESSION['aa']." WHERE Diagnosis='".$diagnosis."'";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();

if($result->num_rows !=0){
  echo "<table>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medicine</th>
            <th>Test</th>
            <th>Repots</th>
            <th>Symptoms</th>
          </tr>";
$diagnosis=$row['Diagnosis'];
echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";


while($row=$result->fetch_assoc()){
  if ($diagnosis==$row['Diagnosis']){
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
  
}
 else{
  $diagnosis=$row['Diagnosis'];
  echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
 }
}

echo "</table>";
}
else{
  echo "<table><td align='center'>NO RECORD FOUND</td></table>";
}

$conn->close();
}


else if($diagnosis!='' && $sdate!='--')
{


$sql="SELECT * FROM A_".$_SESSION['aa']." WHERE Date >= '".$sdate."' and Date <= '".$edate."' and Diagnosis='".$diagnosis."'";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

if($result->num_rows !=0){
  echo "<table>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medicine</th>
            <th>Test</th>
            <th>Repots</th>
            <th>Symptoms</th>
          </tr>";
$diagnosis=$row['Diagnosis'];
echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";


while($row=$result->fetch_assoc()){
  if ($diagnosis==$row['Diagnosis']){
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
  
}
 else{
  $diagnosis=$row['Diagnosis'];
  echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
 }
}

echo "</table>";
}
else{
  echo "<table><td align='center'>NO RECORD FOUND</td></table>";
}

$conn->close();
}


else if($diagnosis=='' && $sdate!='--')
{


$sql="SELECT * FROM A_".$_SESSION['aa']." WHERE Date >= '".$sdate."' and Date <= '".$edate."'";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

if($result->num_rows !=0){
  echo "<table>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medicine</th>
            <th>Test</th>
            <th>Repots</th>
            <th>Symptoms</th>
          </tr>";
$diagnosis=$row['Diagnosis'];
echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";


while($row=$result->fetch_assoc()){
  if ($diagnosis==$row['Diagnosis']){
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
  
}
 else{
  $diagnosis=$row['Diagnosis'];
  echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
 }
}

echo "</table>";
}
else{
  echo "<table><td align='center'>NO RECORD FOUND</td></table>";
}

$conn->close();
}

else if($diagnosis=='' && $sdate=='--')
{


$sql="SELECT * FROM A_".$_SESSION['aa'];
$result=$conn->query($sql);

$row=$result->fetch_assoc();

if($result->num_rows !=0){
  echo "<table>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medicine</th>
            <th>Test</th>
            <th>Repots</th>
            <th>Symptoms</th>
          </tr>";
$diagnosis=$row['Diagnosis'];
echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";


while($row=$result->fetch_assoc()){
  if ($diagnosis==$row['Diagnosis']){
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
  
}
 else{
  $diagnosis=$row['Diagnosis'];
  echo "<td align='center' style='font-size:170%' colspan='6'>".$diagnosis;
  echo "<tr>";
  echo "<td>".$row['Date']."</td>";
  echo "<td>".$row['Doctor']."</td>";
  if($row['Medicine']!=NULL)
    echo "<td>".$row['Medicine']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Test']!=NULL)
    echo "<td>".$row['Test']."</td>";
  else
    echo"<td>NULL</td>";
  if($row['Report']!=NULL)
    echo "<td><a href='".$row['Report']."'>Click here</a></td>";
  else
    echo"<td>NULL</td>";
  echo "<td>".$row['Symptoms']."</td>";
  echo "</tr>";
 }
}

echo "</table>";
}
else{
  echo "<table><td align='center'>NO RECORD FOUND</td></table>";
}

$conn->close();
}
?>