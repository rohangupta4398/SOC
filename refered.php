<?php


/*session_start();
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";
$comments=$_POST['comments'];
$lic=$_POST['doc'];
$aadhar=$_SESSION['a'];*/

session_start();
$aadhar=$_SESSION['a'];
$comments=$_POST['comments'];
$conn = new mysqli('localhost','root','sarthak2007','SOC');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$state=$_POST['state'];
$city=$_POST['city'];
$speciality=$_POST['speciality'];
$doctor=$_POST['doctor'];
//echo $doctor;
$sql="SELECT * FROM patient where AADHAR=".$aadhar;
$result=$conn->query($sql);

$row=$result->fetch_assoc();
$name=$row['Name'];
$sql="SELECT * FROM doctor where LicenseID='".$_SESSION['LicenseID']."'";
$result=$conn->query($sql);

$row=$result->fetch_assoc();
$named=$row['Name'];
$sql = "INSERT INTO ".$doctor."_referred (Aadhar,Patient_Name,Comments,Date,Doctor) 
VALUES (".$aadhar.",'".$name."','".$comments."',NOW(),'".$named."')";

if ($conn->query($sql) === TRUE) {
    header('Location:final.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>