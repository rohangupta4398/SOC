<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";
$comments=$_GET['comments'];
$lic=$_GET['doc'];
$aadhar=170635170635;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ".$lic."_referred (Sno,Aadhar,Patient_name,Comments,Date,Doctor) 
VALUES (2,".$aadhar.",'sa','".$comments."',NOW(),'param')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>