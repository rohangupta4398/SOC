<?php
session_start();
//$_SESSION["login"]="Doctor";
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	html {
		background: linear-gradient(to left, rgba(204,255,255,0.3), rgba(150,153,255,0.7));
	}
	label{
		float: center;
		width:200px;
		display:inline-block;
		text-align:right;
		clear:center;
		font-size:28px;
	}

	input[type=submit]{
    width: 180px;  height: 40px;
    font-size: 30px;
    opacity: 0.8;
	}
	::-webkit-input-placeholder {
 	font-size: 20px;
	}
	input {
		
		display:inline-block;
 		width:350px;
 		height:50px;
 		font-size: 28px;
 		float:center;
 		border-radius: 10px;
 		padding: 2px;
 		opacity: 0.5;

   }
	</style>
</head>
<body>
<br><br><br><br><br><br>
<form>
	<div>
		<center>
			<span id='3' style="color: red"></span>
			<br>
  <label>USER ID:</label>
  <input type="text" class="iop" name="firstname" id='1' placeholder=" Enter LICENSE NUMBER" required>
  <br><br>
  <label>PASSWORD:</label>
  <input type="password" class="iop" name="lastname" id='2' placeholder=" Enter Password" required>
  <br><br>
  <input type="button" id="uni" value="SUBMIT" style="text-align: center" onclick="f();">
    </center>
</div>

</form>

<script>
	function f(){
	var xml=new XMLHttpRequest();
	var a=document.getElementById('1').value;
	var b=document.getElementById('2').value;
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
				window.top.location.href = "doctor_login1.php";
			}
		}

	};
	xml.open("POST","checkdoc.php?firstname="+a+"&lastname="+b,true);
	xml.send();
	}
</script>
</body>
</html>