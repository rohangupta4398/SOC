<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";
$symptoms=$_POST['symptoms'];
$diagnosis=$_POST['disgnosis'];
$severity=$_POST['severity'];
$aadhar=$_SESSION['a'];
$lic=$_SESSION['LicenseID'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT * FROM patient WHERE AADHAR=".$aadhar;
$result=$conn->query($sql); 
$row = $result->fetch_assoc();
$name=$row["Name"];
$sql = "INSERT INTO ".$lic."_curr (AADHAR,Patient_name,Date,Severity,Diagnosis) 
VALUES (".$aadhar.",'".$name."',NOW(),".$severity.",'".$diagnosis."')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql ="SELECT * FROM doctor WHERE LicenseID='".$lic."'";
$result=$conn->query($sql); 
$row = $result->fetch_assoc();
$doctor=$row["Name"];
$sql="INSERT INTO A_".$aadhar." (Symptoms,Diagnosis,Date,Doctor,Status) VALUES ('".$symptoms."','".$diagnosis."',NOW(),'".$doctor."','Y')";
$result=$conn->query($sql);


$sql="SELECT * FROM ".$lic."_referred WHERE AADHAR=".$aadhar;
$result=$conn->query($sql);
if($result->num_rows !=0 ){
	$sql="DELETE FROM ".$lic."_referred	WHERE Aadhar=".$aadhar;

	$conn->query($sql);
		
}
header('Location:final.php');
$conn->close();
?>
