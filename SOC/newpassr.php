<?php
session_start();
//$_SESSION["login"]="Doctor";
if(!isset($_SESSION['random']))
  header('Location:patientregister.php');
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>SET</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="header">
		 <i class="fa fa-heart w3-margin-bottom w3-large"></i>
		<a href="/soc/login_page.php">MEDHELP</a>
	</div>


	
	

	<form>
		<h1>Set New Password</h1>
		<br>
		<span id='3' style="color: red"></span>
		<br>
		<input type="password" placeholder="New password" id="1" name="firstname" required>
		<input type="password" placeholder="Confirm password" id="2" name="lastname" required>
		<br><br>
		<input type="button"  value="Submit" onclick="f();">
		<input type="reset" value="RESET">

	</form>
<script>
	function f(){

	var xml=new XMLHttpRequest();
	var a=document.getElementById('1').value.trim();
	var b=document.getElementById('2').value.trim();
	if(a=="" || b==""){
		document.getElementById('3').innerHTML="Please fill the Password";
		return;
	}
	else if(a!=b){
		document.getElementById('3').innerHTML="Passwords don't match";
		return;
	}
	xml.onreadystatechange=function(){

		if(this.readyState==4 && this.status==200){
			if(this.responseText==1)
				window.location.href = "as_patient.php";
			if(this.responseText==2)
				document.getElementById('3').innerHTML="Password not updated";
		}

	};
	xml.open("POST","setpasswordp.php?firstname="+a,true);
	xml.send();
	}
</script>	
</body>
</html>