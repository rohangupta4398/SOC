<?php
session_start();
$lic=$_REQUEST['firstname'];
$conn=mysqli_connect("localhost","root","sarthak2007","SOC");
    
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}

$sql="select * from doctor where LicenseID='".$lic."'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)<=0)
	echo 1;
else
	echo 2;
mysqli_close($conn);
?>