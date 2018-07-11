<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";

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

$sql = "INSERT INTO S_".$_SESSION['aa']." (sugar,date_time) values (".$sugar_level.",'".$year."-".$month."-".$day." ".$hour.":".$minute.":09 ')";

if ($conn->query($sql) === TRUE) {
	$conn->close();
    $message = "Sugar level added successfully";
	echo "<script type='text/javascript'>alert('$message');window.location.href='pat.php';</script>";
} else {
	$conn->close();
    $message = "Not added!";
	echo "<script type='text/javascript'>alert('$message');window.location.href='pat.php';</script>";
}
?>



