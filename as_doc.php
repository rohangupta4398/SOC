<?php
session_start();
$_SESSION["login"]="Doctor";
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
<form action="checkdoc.php" method="POST" target="_top">
	<div>
		<center>
  <label>USER ID:</label>
  <input type="text" class="iop" name="firstname" placeholder=" Enter LICENSE NUMBER" required>
  <br><br>
  <label>PASSWORD:</label>
  <input type="password" class="iop" name="lastname" placeholder=" Enter Password" required>
  <br><br>
  <input type="submit" id="uni" value="SUBMIT" style="text-align: center">
    </center>
</div>

</form>

</body>
</html>