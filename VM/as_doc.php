<?php
session_start();
unset($_SESSION['rand']);
unset($_SESSION['LicenseID']);
//$_SESSION["login"]="Doctor";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Below</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="medhelp blue.png">
</head>
<body>

	<!-- <div class="header">
		 <i class="fa fa-heart w3-margin-bottom w3-large"></i>
		<a href="/soc/login_page.php">MEDHELP</a>
	</div> -->


	<div class="wrapper">
		
		<a href='index.php'>
		<img src='Medhelp icon.png' style='width:10%;height:10%; '></a>
		<!-- <span style="position: relative;top:5%;font-size: 120%;color:blue;"><a href="login_page.php">MEDHELP
		</a></span> -->
	<div class="container">
		
		<h1 style='font-size: 350%'><b>Welcome</b></h1>
	

	<form class="form">
		<b><span id='3' style="color: red;font-size: 120%"></span></b>
		<br>
		
		<input type="text" placeholder="Enter LicenseID" id="1" name="firstname" required>
		<input type="password" placeholder="Enter password" id="2" name="lastname" required>
		<br>
		<span style="font-size: 120%;color:blue;"><b><a href="forgot.php">Forgot Password?</a></b></span>
		<br><br>
		<button type="button" onclick='f();' id="login-button">Login</button>
		<button type="reset" >Reset</button>

	</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	</div>

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
		document.getElementById('3').innerHTML="Please fill the LicenseID";
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
				window.top.location.href = "final.php";
			}
		}

	};
	xml.open("POST","checkdoc.php?firstname="+a+"&lastname="+b,true);
	xml.send();
	}
</script>
</body>
</html>
