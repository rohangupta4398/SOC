<?php
// define variables and set to empty values
$meds = $tests = $symptoms = $height = $weight =  $systolic = $diastolic = $comment = "";


$symptoms = test_input($_POST["symptoms"]);
$meds = test_input($_POST["meds"]);
$tests = test_input($_POST["tests"]);
$height = test_input($_POST["height"]);
$weight = test_input($_POST["weight"]);
$systolic = test_input($_POST["systolic"]);
$diastolic = test_input($_POST["diastolic"]);
$comment = test_input($_POST["comments"]);

if(empty($meds) && empty($tests) && empty($symptoms) && empty($height) && empty($weight) &&  empty($systolic) && empty($diastolic) && empty($comment))
{
	$message = "Invalid form!";
	echo "<script>alert('$message');</script>";
}
else if((!empty($systolic) && empty($diastolic)) || (empty($systolic) && !empty($diastolic)))
{
	$message = "Invalid form!";
	echo "<script>alert('$message');</script>";
}
else
{
	$servername = "localnudehost";
	$username = "root";
	$password = "1111";
	$dbname = "records";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO asd (meds,tests,symptoms,systolic,diastolic,height,weight,comments) VALUES ('".$meds."','".$tests."','".$symptoms."','".$systolic."','".$diastolic."','".$height."','".$weight."','".$comment."')";
if ($conn->query($sql) == TRUE) {
		$message = "Succesfull added!";
		echo "<script type='text/javascript'>alert('$message');</script>";
} else {
		$message = "Not added...Try again!";
		echo "<script type='text/javascript'>alert('$message');</script>";
}

$conn->close();

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>