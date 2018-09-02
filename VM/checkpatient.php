<?php
session_start();

function check($usr,$pass){

	$conn=mysqli_connect("localhost","root","sarthak2007","SOC");
	
	if(!$conn){
		die("Connection failed:".mysqli_connect_error());
	}

	$pass=SHA1($pass);
	
	$sql="select AADHAR,Password from patient where AADHAR='$usr'and Password='$pass' ";
	
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
$_SESSION['Aadhar']=$usr;
if(check($usr,$pass)==1){
	mysqli_close($conn);
	echo 1;
}
if(check($usr,$pass)==2){
	mysqli_close($conn);
	echo 2;
}
	
	
?>