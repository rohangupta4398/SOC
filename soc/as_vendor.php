<?php
session_start();
// unset($_SESSION['rand']);
unset($_SESSION['ID']);
//$_SESSION["login"]="Doctor";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('pic8.jpg');background-repeat:repeat;background-size: cover" class="w3-theme-l5">

	<div class="header">
		 <i class="fa fa-heart w3-margin-bottom w3-large"></i>
		<a href="/soc/login_page.php">MEDHELP</a>
	</div>


	<h1>Login</h1>
	

	<form>
		<span id='3' style="color: red"></span>
		<br>
		
		<input type="text" placeholder="Enter Your ID" id="1" name="firstname" required>
		<input type="password" placeholder="Enter password" id="2" name="lastname" required>
		<span style="color:blue"><a href="forgot.php">Forgot Password?</a></span>
		<br><br>
		<input type="button" onclick="f();" value="LOGIN">
		<input type="reset" value="RESET">

	</form>

<script>
	function f(){

	var xml=new XMLHttpRequest();
	var a=document.getElementById('1').value.trim();
	var b=document.getElementById('2').value.trim();
	if(a=="" && b==""){
		document.getElementById('3').innerHTML="Please fill the Details";
		return;
	}
	if(a==""){
		document.getElementById('3').innerHTML="Please fill your ID";
		return;
	}
	if(b==""){
		document.getElementById('3').innerHTML="Please fill the Password";
		return;
	}
	xml.onreadystatechange=function(){

		if(this.readyState==4 && this.status==200){
			
			if(this.responseText==1){
				//document.write('//2');
				//document.getElementById('3').innerHTML=this.responseText;
				document.getElementById('3').innerHTML="*Incorrect Username or Password";
				//document.getElementById('3').style.display=inline-block;
			}
			if(this.responseText==2){

				//header("Location: doctor_login1.php");
				window.top.location.href = "vendor.php";
			}
		}

	};
	xml.open("POST","checkvendor.php?firstname="+a+"&lastname="+b,true);
	xml.send();
	}
</script>
</body>
</html>