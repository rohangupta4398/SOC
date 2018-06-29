<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medhelp";
$sugar_level=$_GET['sugar_level'];
$year=$_GET['by'];
$month=$_GET['bm'];
$day=$_GET['bd'];
$hour=$_GET['th'];
$minute=$_GET['tm'];
$id="xyz170635_sugar_level";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ".$id." (sugar_lvl,date_time) values (".$sugar_level.",'".$year."-".$month."-".$day." ".$hour.":".$minute.":09 ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>