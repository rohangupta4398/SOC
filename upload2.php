<?php

$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT * FROM ".$paetient_history;
$result=$conn->query($sql);
$sno=$result->num_rows + 1;

$path='uploads\$sno_'.$aadhar.".png";
$date=$_GET['year']."-".$_GET['month']."-".$_GET['day'];

$sql="INSERT INTO ".$D


// UPLOADING PORTION

if(isset($_POST["submit"]))
{
    $UploadName=$_FILES['UploadFileField']['name'];
    $UploadTmp=$_FILES['UploadFileField']['tmp_name'];
    $UploadType=$_FILES['UploadFileField']['type'];

    $UploadName=preg_replace("#[^a-z0-9.]#i","",$UploadName);

    if(!$UploadTmp)
    {
    	die("NO file");
    }
    else
    {
    	$UploadName="adi.php";
    	move_uploaded_file($UploadTmp,"uploads/$UploadName");
    	echo "<alert>report uploaded</alert>";
    }
}
?>