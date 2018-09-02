<?php
session_start();
if(!isset($_SESSION['LicenseID']))
  header('Location:as_doc.php');

//echo $_SESSION['Category'];
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$lic=$_SESSION['LicenseID'];
$sql = "SELECT * FROM doctor where LicenseID='".$lic."'";
//else echo 0;
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>MEDORA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" type="image/png" href="medhelpblue.png">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body { 
  background: url(bkgf.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align w3-large" style="background-color:black">
  <span style='position: relative;height: 100%;width: 3%;float: left;vertical-align: middle;'><a href='index.php' class="w3-bar-item w3-padding-large w3-theme-d5 w3-left" style="position: relative;text-decoration: none;width: 20%;vertical-align: middle;"><img src='medhelpblue.png' style='height: 22px;width: 22px;float: left;vertical-align: middle;margin-top:4px 
    '></span></a>
  <a href="medorad.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5"><b><span style="font-size:18px">MEDORA</span></b></a>
  <a href="final.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5"><i class="fa fa-home w3-margin-right"></i>HOME</a>
  <a href="as_doc.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-right w3-theme-d5"><i class="fa fa-sign-out w3-margin-right"></i>LOGOUT</a>
  
 </div>
</div>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round" style="position:fixed;left:80px;top:90px;width:350px;background-color:  rgba(255, 255, 255, 0.65);color:black">
        <div class="w3-container">
         <h2 class="w3-center">Profile</h2>
         <p class="w3-center"><img src="<?php echo $row['Image']; ?>" class="w3-circle" style="height:150px;width:110px;" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>Name: </strong><?php echo $row["Name"]; ?></p>
         <p><i class="fa fa-venus-mars fa-fw w3-margin-right w3-text-theme"></i><strong>Sex: </strong><?php echo $row["Gender"]; ?></p>
         <p><i class="fa fa-inr fa-fw w3-margin-right w3-text-theme"></i><strong>Specialist: </strong><?php echo $row["Specialist"]; ?></p> 
        </div>
      </div>
      <br>
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">

        <?php
          $conn = mysqli_connect("localhost","root","sarthak2007","SOC");
          $sql = "SELECT * FROM questions where Sno=".$_SESSION['Table']."";
          $result = mysqli_query($conn, $sql);
 		      $row = mysqli_fetch_assoc($result);
          $sql="SELECT * FROM answer".$row['Sno']." where Sno=".$_SESSION['Sno']."" ;
  	      $ans = mysqli_query($conn, $sql);     
  	      $sql = "SELECT * FROM doctor where LicenseID='".$row['LIC']."'";               
  	      $pat=mysqli_query($conn,$sql);
  	      $rowp=mysqli_fetch_assoc($pat);
          echo "<div class='w3-container w3-card w3-round w3-margin w3-padding-large' style='background-color:  rgba(255, 255, 255, 0.65);color:black' ><br>
                <img src='".$rowp['Image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px;float:left;'>
                <span>Name:".$rowp['Name']."<br>Category:".$row['Category']."</span><span style='float:right'>Specialist:".$rowp['Specialist']."</span>
                <br><br><br><br>
                <h4 style='font-size: 20px;text-align: justify;display: inline-block;' ><b>".stripslashes($row['Question'])."</h4><br></b>
                <hr class='w3-clear'>
                <p><span class='w3-left w3-opacity'>".$row['Date']."</span><span class='w3-right w3-opacity'>No. of answers:".mysqli_num_rows($ans)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></p>        
                </div>";
          $answer = mysqli_fetch_assoc($ans);    
	        $sql = "SELECT * FROM doctor where LicenseID='".$answer['LIC']."'";
          $ansd=mysqli_query($conn,$sql);
          $answd=mysqli_fetch_assoc($ansd);
          echo "<div class='w3-container w3-card w3-round w3-margin' style='background-color:  rgba(255, 255, 255, 0.65);color:black'><br>
                <img src='".$answd['Image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px;float:left;'>
                <span>Name:".$answd['Name']."<br>Specialist:".$answd['Specialist']."</span>
                <br><br><br><br>
                <span style='font-size: 18px;text-align: justify;display: inline-block;''>".stripslashes($answer['Answer'])."
                <br></span>
                <hr class='w3-clear'>
                <div><span class='w3-left w3-opacity'>".$answer['Date']."</span></div>        
              </div>";  
  	      $sql="UPDATE answer".$_SESSION['Table']." set Y='Y' where Sno=".$_SESSION['Sno']."";      
  	      mysqli_query($conn,$sql);
  	      mysqli_close($conn);
        ?>
      
    <!-- End Middle Column -->
    </div>
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
</body>
</html> 
