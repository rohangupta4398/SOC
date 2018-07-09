<?php

session_start();

// define variables and set to empty values

$adhar=$_REQUEST['aadhar_no'];

$date=$_REQUEST['date'];




$conn = new mysqli("localhost","root","sarthak2007","SOC");



if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}


Aadhar,Date_doctor
$sql = "SELECT * FROM".$_SESSION['ID']." WHERE Aadhar=".$adhar." Date_doctor='".$date."'";


$result=$conn->query();


if ($result===TRUE) {
  
 echo "<select id='test_name' name='test_name'>
        <option value=''></option>";
 while($row=$result->fetch_assoc())
    
{ echo "<option value='".$row['Test_name']."'>".$row['Test_name']."</option>";}

 echo "</select>";


} else {

	echo "NO TEST FOUND";


}

$conn->close();

?>