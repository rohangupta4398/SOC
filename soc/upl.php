<?php
session_start();
$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";

$conn=new mysqli($servername,$username,$password,$dbname);
$aadhar=$_POST['aadhar_no'];
$sno=$_POST['serial_no'];
$sql="UPDATE ".$_SESSION['ID']." set Status='C' where Aadhar='".$aadhar."' and PSno=".$sno;
$conn->query($sql);
$path='uploads/'.$sno.'_'.$aadhar.".png";
$sql="UPDATE A_".$aadhar." set Report ='".$path."' where Sno= ".$sno;
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
    echo "<script type='text/javascript'>alert('$message');window.location.href='vendor.php';</script>";
}
else
{
    //echo 2;
    $UploadName=$path;
    move_uploaded_file($UploadTmp,$UploadName);
    $conn->close();
    $message = "Report Uploaded Successfully!";
    echo "<script type='text/javascript'>alert('$message');window.location.href='vendor.php';</script>";
}

?>