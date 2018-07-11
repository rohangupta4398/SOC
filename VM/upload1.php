<?php
session_start();
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT * FROM A_".$_SESSION['Aadhar'];
$result=$conn->query($sql);
$sno=$result->num_rows + 1;
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$path='uploads/'.$sno.'_'.$_SESSION['Aadhar'].".png";
$test=$_POST['test_name'];
$sql="INSERT INTO A_".$_SESSION['Aadhar']." (Date,Test,Report) values ('".$year."-".$month."-".$day."','".$test."','".$path."') ";
$conn->query($sql);

// UPLOADING PORTION


$UploadName=$_FILES['UploadFileField']['name'];
$UploadTmp=$_FILES['UploadFileField']['tmp_name'];
$UploadType=$_FILES['UploadFileField']['type'];

$UploadName=preg_replace("#[^a-z0-9.]#i","",$UploadName);

if(!$UploadTmp)
{
   $conn->close();
    $message = "Not Uploaded!";
    echo "<script type='text/javascript'>alert('$message');window.location.href='patient_profile.php';</script>";
}
else
{
    //echo 2;
    $UploadName=$path;
    move_uploaded_file($UploadTmp,$UploadName);
    $conn->close();
    $message = "Report Uploaded Successfully!";
    echo "<script type='text/javascript'>alert('$message');window.location.href='patient_profile.php';</script>";
}

?>