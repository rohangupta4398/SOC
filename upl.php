<?php

$adhar=$_POST['aadhar_no'];
$seriall=$_POST['serial_no'];

$UploadName=$_FILES['UploadFileField']['name'];
$UploadTmp=$_FILES['UploadFileField']['tmp_name'];
$UploadType=$_FILES['UploadFileField']['type'];

//$UploadName=preg_replace("#[^a-z0-9.]#i","",$UploadName);

$conn = new mysqli("localhost","root","1111","records");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!$UploadTmp)
{
	$message = "Not added!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
	$UploadName= $seriall."_".$adhar;
	move_uploaded_file($UploadTmp,"uploads/$UploadName");
	header('Location: patient_profile.php');
}
?>