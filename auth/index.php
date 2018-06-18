<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,Name,Password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<style>
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/0kjHIH6/animated-cartoon-cloudy-sky-and-ground_v12a0p5jl__F0000.png");
    min-height: 100%;
}
</style>

<body>

	<div class="header">

<header class="bgimg-1 " id="home">
		 <i class="fa fa-heart w3-margin-bottom w3-large"></i>
		<a href="/">MED_HELP</a>
	</div>
	<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
	
	<?php if( !empty($user) ): ?>

		<br />Welcome <?= $user['Name']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
		<a href="logout.php">Logout?</a>

	<?php else: ?>
<div class="w3-container" style="padding:28px 70px" id="about">
  <h3 class="w3-center"><font size="10"><p style="font-family:'Pacifico', cursive;">We are Unfold,We are Open</p></font></h3>
  <p class="w3-center w3-medium"><i>"For the mind disturbed,the still beauty of dawn is nature's finest balm"<i></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter"><a href="login.php">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i></a>
      <p class="w3-large">Login</p>
      <p>quickly login to your accout at med_Help simply using your password and username</p>
    </div>
    <div class="w3-quarter"><a href="register.php">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i></a>
      <p class="w3-large">Register</p>
      <p>First Time here , no worries ,just do a quick registration</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Buy Me a Beer</p>
      <p>Its quite Generous Simple and Easy. You'll buy.I'll drink</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Need Help .We are always here to provide you any possible Support </p>
    </div>
  </div>
</div>

	<?php endif; ?>

  

<!-- Footer -->
<footer style="position:absolute;bottom:1px;class="w3-center w3-transparent w3-padding-60">
 
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>
 


</body>
</html>