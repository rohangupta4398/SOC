<?php
session_start();

$aadhar=$_SESSION['aa'];
$sev=$_POST['Severity'];
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="UPDATE ".$_SESSION['LicenseID']."_curr SET Severity='".$sev."' WHERE AADHAR='".$aadhar."'";
if ($conn->query($sql) == TRUE) {
		$message = "Succesfully updated!";
		echo "<script type='text/javascript'>alert('$message');window.location.href = 'pat.php';
</script>";
} else {
		$message = "Not updated...Try again!";
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script type='text/javascript'>alert('$message');window.location.href = 'pat.php';</script>";
}

$conn->close();
?>