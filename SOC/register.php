<?php
session_start();
include('way2sms-api.php');
//$_SESSION["login"]="Doctor";
$usr=$_REQUEST['firstname'];
$_SESSION['aadhar']=$usr;
$conn=mysqli_connect("localhost","root","sarthak2007","SOC");
    
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    
    $sql="select * from patient where Aadhar='$usr'";
    
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)<=0){
    	echo 1;
    }
    else{
    	$contact=$row['ContactNo'];
        if($row['Password']==NULL){
        	$_SESSION['random']=rand(1000,9999);
        	sendWay2SMS ( '7706848545' , '1234' , $contact , "Your OTP for MEDHELP is".$_SESSION['random']);
    		echo 2;
        }
        else
            echo 3;
    }
    mysqli_close($conn);
?>
