<?php
// define variables and set to empty values
$adhar=$_POST['aadhar_no'];
$serial=$_POST['serial_no'];

$conn = new mysqli("localhost","root","1111","records");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vendor (aadhar,serial) VALUES('".$adhar."','".$serial."')";

if ($conn->query($sql) === TRUE) {
	$conn->close();
    header('Location: patient_profile.php');
} else {
	$conn->close();
    $message = "Not added!";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>