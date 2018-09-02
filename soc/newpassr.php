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
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="medhelp blue.png">
</head>
<body>

	<div class="wrapper">
		
		<a href='login_page.php'>
		<img src='Medhelp icon.png' style='width:10%;height:10%; '></a>


	<div class="container">
		
		<h1 style='font-size: 350%'><b>Set New Password</b></h1>
	<form>
		<span id='3' style="color: red"></span>
		<br>
		<input type="password" placeholder="New password" id="1" name="firstname" required>
		<input type="password" placeholder="Confirm password" id="2" name="lastname" required>
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