<?php
session_start();
?>

<html>
<head>
	<title>Med-Help Login Page</title>
	<script>
		function stURL(url){
			//document.getElementById('iframe1').background = none;
			document.getElementById('iframe1').src = url;
		}
</script>
<style>
	body{
		background: url(back.jpg) no-repeat center fixed;
	}
	h1{
    	text-align: center;
    	font-size: 70px;
	}
	form{
		text-align: center;
		font-size: 30px;
	}
	.button {
	    text-align: center;
	    display: inline-block;
	    position: relative;
	    top: -40px;
	    font-size: 32px;
	    border-radius: 15px;
	    background-color: MediumAquaMarine;
	    border: green;
	    color: ivory;
	}
	.button:hover {
		background-color: limegreen;

	}
	iframe[id="iframe1"] {
		background: none;
		border: none;

	}
</style>

</head>
<body>

<h1>Login Page</h1>
<br><br><br><br><br><br><br><br><br><br><br><br>
<form>

<input type="button" onclick="stURL('as_doc.html')" class="button" value="Login as Doctor">   
<input type="button" onclick="stURL('as_patient.html')" class="button" value='Login as Patient'>

<div id="contentframe" style="position:relative; top: 0px; left: 0px;">
<iframe id="iframe1" height="400" width="700"></iframe>
</div>
</form>
</body>
</html>

