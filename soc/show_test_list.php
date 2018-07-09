<?php

session_start();

// define variables and set to empty values

$adhar=$_REQUEST['aadhar_no'];

$date=$_REQUEST['date'];




$conn = new mysqli("localhost","root","sarthak2007","SOC");



if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}


//Aadhar,Date_doctor
$sql = "SELECT * FROM A_".$adhar." WHERE Date='".$date."'";


$result=$conn->query($sql);

if ($result->num_rows>0) {
  
 echo "<select id='test_name' name='test_name'>
        <option value=''>Select Test</option>";
 while($row=$result->fetch_assoc())
    
{ echo "<option value='".$row['Test']."'>".$row['Test']."</option>";}

 echo "</select>";


} 
else {
	//echo $mysqli->error;
	echo "NO TEST FOUND ";


}

$conn->close();

?>