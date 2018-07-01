<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";
$diagnosis=$_GET['disgnosis'];
$severity=$_GET['severity'];
$aadhar=747284991930;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT * FROM patient WHERE AADHAR=".$aadhar;
$result=$conn->query($sql); 

$name="a";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name=$row["Name"];
    }
} else {
    echo "no patient found";
}

$sql = "SELECT * FROM xyz170635_curr";
$result=$conn->query($sql);
$Sno=$result->num_rows; 
$Sno=$Sno+1;
$sql = "INSERT INTO xyz170635_curr (Sno,AADHAR,Patient_name,Date,Severity,Diagnosis) 
VALUES (".$Sno.",".$aadhar.",'".$name."',NOW(),".$severity.",'".$diagnosis."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>