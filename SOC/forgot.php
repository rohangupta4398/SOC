<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot</title>
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


	
	

	<form >
		<span id='3' style="color: red"></span>
		<br>
		
		<input type="text" placeholder="Enter LicenseID" id="1" name="lic" required>
		<br><br>
		<input type="button"  value="Send OTP" onclick="f();">
		<input type="reset" value="RESET">

	</form>
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