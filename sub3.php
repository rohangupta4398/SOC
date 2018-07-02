<?php
// define variables and set to empty values
$servername = $username = $password = $dbname = "";
// $sugar_level = $year = $month = $day = $hour =  $minute = "";

$servername = "localhost";
$username = "root";
$password = "1111";
$dbname = "records";

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

$sql="SELECT * FROM XYZ_Current where AADHAR=".$adhar;

$result=$conn->query($sql);
if($result->fetch_assoc()==TRUE)
{
	$name=$row["Patient_Name"];
	$date=$row["Date"];
	$diag=$row["Diagnosis"];
}

$sql="SELECT * from XYZ_Current";
$result=$conn->query($sql);
$sno=$result->num_rows;
$sno+=1;

$sql1 = "DELETE FROM XYZ_Current WHERE Aadhar=".$adhar;
$sql2 = "INSERT INTO XYZ_Closed (Sno,AADHAR,Patient_Name,From_Date,To_Date,Diagnosis) VALUES(".$sno.",".$adhar.",'".$name."','".$date."',NOW(),'".$diag."')";

if ($con1->query($sql1) === TRUE && $con2->query($sql2) === TRUE) {
	$con1->close();
	$con2->close();
    header('Location: patient.php');
} else {
	$conn->close();
    $message = "Try Again!";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>