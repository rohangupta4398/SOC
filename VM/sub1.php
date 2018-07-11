<?php
session_start();

$aadhar=$_SESSION['aa'];
$symptoms = test_input($_POST["symptoms"]);
$meds = test_input($_POST["meds"]);
$tests = test_input($_POST["tests"]);
$systolic = test_input($_POST["systolic"]);
$diastolic = test_input($_POST["diastolic"]);
$diagnosis = test_input($_POST["diagnosis"]);
if(empty($diagnosis))
	$diagnosis='NULL';
if(empty($meds))
	$meds='NULL';
if(empty($tests))
	$tests='NULL';
if(empty($systolic))
	$systolic='NULL';
if(empty($diastolic))
	$diastolic='NULL';



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
$sql="SELECT * FROM doctor where LicenseID='".$_SESSION['LicenseID']."'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$name=$row['Name'];
if($diagnosis!='NULL'){
	$sql="UPDATE ".$_SESSION['LicenseID']."_curr SET Diagnosis='".$diagnosis."' WHERE AADHAR='".$aadhar."'";
	$conn->query($sql);
}
$sql="SELECT * FROM ".$_SESSION['LicenseID']."_curr where AADHAR=".$aadhar;
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$diagnosis=$row['Diagnosis'];
$sql = "INSERT INTO A_".$aadhar." (Date,Medicine,Test,Symptoms,Blood_Pressure,Blood_PressureD,Diagnosis,Status,Doctor) VALUES (NOW(),'".$meds."','".$tests."','".$symptoms."',$systolic,$diastolic,'".$diagnosis."','R','".$name."')";
if ($conn->query($sql) == TRUE) {
		$message = "Succesfully added!";
		echo "<script type='text/javascript'>alert('$message');window.location.href = 'pat.php';
</script>";
} else {
		$message = "Not added...Try again!";
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script type='text/javascript'>alert('$message');window.location.href = 'pat.php';</script>";
}

$conn->close();



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>