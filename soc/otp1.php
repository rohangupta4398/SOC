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
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="medhelp blue.png">
</head>
<body>

	<div class="wrapper">
		
		<a href='login_page.php'>
		<img src='Medhelp icon.png' style='width:10%;height:10%; '></a>


	<div class="container">
		
		<h1 style='font-size: 150%'><b>OTP sent to your registered Mobile No.</b></h1>

	
	

	<form action="newpass.php" method="post">
		<span id='3' style="color: red"></span>
		<br>
		<input type="text" placeholder="Enter OTP" id="1" name="firstname" required>
		<br><br>
		<button type="button" onclick="f();">Submit</button>
		<button type="reset">Reset</button>

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