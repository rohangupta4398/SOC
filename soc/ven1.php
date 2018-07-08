<?php
session_start();
// define variables and set to empty values
$adhar=$_POST['aadhar_no'];
$serial=$_POST['serial_no'];

$conn = new mysqli("localhost","root","sarthak2007","SOC");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ".$_SESSION['ID']." (Aadhar,PSno,Date,Status) VALUES('".$adhar."',".$serial.",NOW(),'I')";

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