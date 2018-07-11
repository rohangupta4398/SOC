<?php
session_start();
$ques=$_POST['question'];
$cat=$_POST['Category'];
// $date=date("h:i:sa")."  ".date("d-m-Y");
$aadhar=$_SESSION['Aadhar'];
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ques=addslashes($ques);
$sql = "insert into questions(Person,Aadhar,Category,Question) values ('P','".$aadhar."','".$cat."','".$ques."')";
mysqli_query($conn, $sql);
$sql = "select * from questions";
$result=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($result);
$table="answer".$rows;
$sql = "CREATE table ".$table." (Sno int auto_increment,LIC varchar(20),Date timestamp,Answer varchar(1000),Y varchar(20),primary key (Sno))";
mysqli_query($conn,$sql);
mysqli_close($conn);
header('Location: medorap.php');
?> 