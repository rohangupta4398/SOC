<?php
SESSION_START();
$conn = new mysqli("localhost","root","sarthak2007","SOC");

$adhar=$_SESSION["a"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="UPDATE XYZ_Current SET Severity=".$_POST["severity"]." Diagnosis='".$_POST['diagnosis']."' WHERE AADHAR=".$adhar;

if($conn->query($sql)==TRUE)
{
	$conn->close();
    $message = "Data updated successfully!";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
	$conn->close();
    $message = "Error...Try Again!";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>