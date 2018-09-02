<?php
session_start();
//$_SESSION["login"]="Doctor";
if(!isset($_SESSION['rand']))
  header('Location:as_doc.php');
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter OTP</title>
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


	
	

	<form action="newpass.php" method="post">
		<span  style="color: red">OTP sent to your registered Mobile No.</span>
		<br>
		<span id='3' style="color: red"></span>
		<br>
		<input type="text" placeholder="Enter OTP" id="1" name="firstname" required>
		<br><br>
		<input type="button"  value="Submit" onclick="f();">
		<input type="reset" value="RESET">

	</form>
<script>
	function f(){

	var xml=new XMLHttpRequest();
	var a=document.getElementById('1').value.trim();
	if(a==""){
		document.getElementById('3').innerHTML="Please fill the OTP";
		return;
	}
	xml.onreadystatechange=function(){

		if(this.readyState==4 && this.status==200){
			
			if(this.responseText==1){
				//document.write('//2');
				//document.getElementById('3').innerHTML=this.responseText;
				document.getElementById('3').innerHTML="*Incorrect OTP";
				//document.getElementById('3').style.display=inline-block;
			}
			if(this.responseText==2){

				//header("Location: doctor_login1.php");
				window.location.href = "newpass.php";
			}
		}

	};
	xml.open("POST","checkotp.php?firstname="+a,true);
	xml.send();
	}
</script>	
</body>
</html>