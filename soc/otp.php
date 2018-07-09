<?php
session_start();
include('trial1.php');
//$_SESSION["login"]="Doctor";
$usr=$_REQUEST['firstname'];
$_SESSION['lic']=$usr;
$conn=mysqli_connect("localhost","root","sarthak2007","SOC");
    
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    
    $sql="select ContactNo from doctor where LicenseID='$usr'";
    
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)<=0){
    	echo 1;
    }
    else{
    	$contact=$row['ContactNo'];
    	$_SESSION['rand']=rand(1000,9999);
        f($contact,"Your OTP for MEDHELP is".$_SESSION['rand']);   
    	echo 2;
    }
    mysqli_close($conn);
?>
