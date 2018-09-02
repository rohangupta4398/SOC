<?php
session_start();
//$_SESSION["login"]="Doctor";
$value=$_REQUEST['firstname'];
if($value==$_SESSION['rand']){
	echo 2;
}
else{
	echo 1;
}
    
?>