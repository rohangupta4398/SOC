<?php
session_start();
// define variables and set to empty values

// $sugar_level = $year = $month = $day = $hour =  $minute = "";

$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";
$adhar=$_SESSION['aa'];
$lic=$_SESSION['LicenseID'];
// $sugar_level=$_POST['sugar'];
// $year=$_POST['yy'];
// $month=$_POST['MM'];
// $day=$_POST['dd'];
// $hour=$_POST['hh'];
// $minute=$_POST['mm'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM ".$lic."_curr where AADHAR=".$adhar;

$result=$conn->query($sql);
$row=$result->fetch_assoc();

$name=$row["Patient_Name"];
$date=$row["Date"];
$diag=$row["Diagnosis"];
$sql="SELECT * FROM doctor where LicenseID='".$lic."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$dname=$row["Name"];


$sql1 = "DELETE FROM ".$lic."_curr WHERE Aadhar=".$adhar;
$sql2 = "INSERT INTO ".$lic."_closed (AADHAR,Patient_Name,From_Date,To_Date,Diagnosis) VALUES(".$adhar.",'".$name."','".$date."',NOW(),'".$diag."')";
$sql3= "INSERT INTO A_".$adhar." (Date,Doctor,Diagnosis,Status) VALUES (NOW(),'".$dname."','".$diag."','N')";
if ($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE && $conn->query($sql3) == TRUE) {
	$conn->close();
	$message = "Case Successfully Closed";
	echo "<script type='text/javascript'>alert('$message');window.location.href='final.php';</script>";
} else {
	$conn->close();
    $message = "Try Again!";
	echo "<script type='text/javascript'>alert('$message');window.location.href='pat.php';</script>";
}
?>