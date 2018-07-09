<?php
session_start();
// define variables and set to empty values
$adhar=$_POST['aadhar_no'];
$dd=$_POST['dd1'];
$mm=$_POST['mm1'];
$yy=$_POST['yy1'];
$date=$yy.'-'.$mm.'-'.$dd;
$name=$_POST['test_name'];
$conn = new mysqli("localhost","root","sarthak2007","SOC");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo 2;
$sql = "INSERT INTO ".$_SESSION['ID']." (Aadhar,Date_doctor,Test_name,Date,Status) VALUES('".$adhar."','".$date."','".$name."',NOW(),'I')";

if ($conn->query($sql) === TRUE) {
	$conn->close();
    $message = "Added Successfully!";
	echo "<script type='text/javascript'>alert('$message');window.location.href='vendor.php'</script>";
} else {
	$conn->close();
    $message = "Not added!";
	echo "<script type='text/javascript'>alert('$message');window.location.href='vendor.php'</script>";
}
?>