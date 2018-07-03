<?php
session_start();
if(!isset($_SESSION['rand']))
  header('Location:as_doc.php');
//$_SESSION["login"]="Doctor";
$pass=$_REQUEST['firstname'];
$pass=SHA1($pass);
$usr=$_SESSION['lic'];
$conn=mysqli_connect("localhost","root","sarthak2007","SOC");
    
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    
    $sql="update doctor set Password='$pass' where LicenseID='$usr'";    
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 2;
}
mysqli_close($conn);
?>
