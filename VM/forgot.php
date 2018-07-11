<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="medhelp blue.png">
</head>
<body>

	<div class="wrapper">
		
		<a href='index.php'>
		<img src='Medhelp icon.png' style='width:10%;height:10%; '></a>

	<div class="container">
	
	<h1 style='font-size: 350%'><b>Forgot Password?</b></h1>
	


	
	

	<form >
		<span id='3' style="color: red"></span>
		<br>
		
		<input type="text" placeholder="Enter LicenseID" id="1" name="lic" required>
		<br><br>
		<button type="button"  value="Send OTP" onclick="f();">Send OTP</button>
		<button type="reset" value="RESET">RESET</button>

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
	if(a==""){
		document.getElementById('3').innerHTML="Please fill the LicenseID";
		return;
	}
	xml.onreadystatechange=function(){

		if(this.readyState==4 && this.status==200){
			
			if(this.responseText==1){
				//document.write('//2');
				//document.getElementById('3').innerHTML=this.responseText;
				document.getElementById('3').innerHTML="*Please fill valid LicenseID";
				//document.getElementById('3').style.display=inline-block;
			}
			if(this.responseText==2){

				//header("Location: doctor_login1.php");
				window.top.location.href = "otp1.php";
			}
		}

	};
	xml.open("POST","otp.php?firstname="+a,true);
	xml.send();
	}
</script>	
</body>
</html>
