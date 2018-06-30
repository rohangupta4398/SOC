<?php
// define variables and set to empty values
$servername = $username = $password = $dbname = "";
$sugar_level = $year = $month = $day = $hour =  $minute = "";

$servername = "localhost";
$username = "root";
$password = "1111";
$dbname = "records";

$sugar_level=$_POST['sugar'];
$year=$_POST['yy'];
$month=$_POST['MM'];
$day=$_POST['dd'];
$hour=$_POST['hh'];
$minute=$_POST['mm'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sugar (sugar,date_time) values ('".$sugar_level."','".$year."-".$month."-".$day." ".$hour.":".$minute.":09 ')";

if ($conn->query($sql) === TRUE) {
	$conn->close();
    header('Location: patient.php');
} else {
	$conn->close();
    $message = "Not added!";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>