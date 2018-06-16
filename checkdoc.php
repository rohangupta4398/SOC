<?php
session_start();

function check($usr,$pass){

	$conn=mysqli_connect("localhost","root","sarthak2007","SOC");
	
	if(!$conn){
		die("Connection failed:".mysqli_connect_error());
	}

	$pass=SHA1($pass);
	
	$sql="select LicenseID,Password from doctor where LicenseID='$usr'and Password='$pass' ";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)<=0){
		return 1;
	}
	else{
		return 2;
	}
}
		
$usr=$_REQUEST['firstname'];
$pass=$_REQUEST['lastname'];
$_SESSION['Username']=$usr;
if(check($usr,$pass)==1)
	echo 1;
if(check($usr,$pass)==2)
	echo 2;
	
	
?>