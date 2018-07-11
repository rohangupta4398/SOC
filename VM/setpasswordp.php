<?php
session_start();
//$_SESSION["login"]="Doctor";
$pass=$_REQUEST['firstname'];
$pass=SHA1($pass);
$usr=$_SESSION['aadhar'];
$conn=mysqli_connect("localhost","root","sarthak2007","SOC");
    
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    
    $sql="update patient set Password='$pass' where AADHAR='$usr'";    
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 2;
}
mysqli_close($conn);
?>
