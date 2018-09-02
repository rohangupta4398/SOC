<?php
session_start();
$ans=$_POST['answer'];
$sno=$_POST['sno'];
$a='0';
$a=$_POST['a'];
//$date=date("h:i:sa")."  ".date("d-m-Y");
$lic=$_SESSION['LicenseID'];
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ans=addslashes($ans);
$sql = "insert into answer".$sno."(LIC,Answer,Y) values ('".$lic."','".$ans."','N')";
mysqli_query($conn, $sql);
mysqli_close($conn);
if($a=='1')
	header('Location: searchd.php');
else if($a=='2')
	header('Location: medorad.php');
else
	header('Location: Categoryd.php');
?> 