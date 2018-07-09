<?php
session_start();
if(!isset($_SESSION['LicenseID']))
  header('Location:as_doc.php');
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
<link rel="icon" type="image/png" href="medhelp blue.png">
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
textarea {
    width: 80%;
    height: 250px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: white;
    font-size: 20px;
    resize: none;
    margin-left: 350px;
}
select {
    width: 23%;
    padding: 10px 15px;
    border-bottom: 1px solid grey;
    border-left:none;
    border-top:none;
    border-right:none;
    border-radius: 4px;
    background-color: #05193e;
    color:white;
    font-size: 20px;
    margin-left: 700px;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align w3-large" style="background-color:black;width:100%">
  <span style='position: relative;height: 100%;width: 3%;float: left;vertical-align: middle;'><a href='login_page.php' class="w3-bar-item w3-padding-large w3-theme-d5 w3-left" style="position: relative;text-decoration: none;width: 20%;vertical-align: middle;"><img src='medhelp blue.png' style='height: 22px;width: 22px;float: left;vertical-align: middle;margin-top:4px 
    '></span></a>
  <a href="medorad.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5"><b><span style="font-size:18px">MEDORA</span></b></a>
  <a href="medorad.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5"><i class="fa fa-home w3-margin-right"></i>HOME</a>

 
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
      <div class="w3-card w3-round" style="position:fixed;left:4.35%;top:8%;width:20%;background-color:  rgba(255, 255, 255, 0.65);color:black">
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
   <div class="w3-col m15">
      <form action="addquestiond.php" method="post">
        <b><textarea placeholder="Ask your question..." name="question" required></textarea></b><br><br><br>
        <select name="Category" required name="category">
          <option value="" disabled selected>Choose category of question</option>
          <option title="Ear related issues" value="Audiologist">Audiologist</option>
          <option title="Issues related to allergies" value="Allergist">Allergist</option>
          <option title="Heart related issues" value="Cardiologist">Cardiologist</option>
          <option title="Teeth related issues" value="Dentist">Dentist</option>
          <option title="Skin related issues" value="Dermatologist">Dermatologist</option>
          <option title="Hormone related issues" value="Endocrinologist">Endocrinologist</option>
          <option title="Issues related to ear,nose and throat" value="ENT Specialist">ENT Specialist</option>
          <option title="Female related issues" value="Gynecologist">Gynecologist</option>
          <option title="Issues related to immune system" value="Immunologist">Immunologist</option>
          <option title="Diseases related to genetic disorders" value="Medical Geneticist">Medical Geneticist</option>
          <option title="Any general question" value="Miscellaneous">Miscellaneous</option>
          <option title="Diseases related to new born infants" value="Neonatologists">Neonatologists</option>
          <option title="Illness related to brain" value="Neurologists">Neurologists</option>
          <option title="Related to cancer" value="Oncologist">Oncologist</option>
          <option title="Issues related to skeletal system" value="Orthopedic Surgeon">Orthopedic Surgeon</option>
          <option title="Issues related to infants and children" value="Pediatrician">Pediatrician</option>
          <option title="Issues related to body" value="Physiologist">Physiologist</option>
          <option title="Issues related to foot" value="Podiatrist">Podiatrist</option>
          <option title="Issues related to mental and behaviourial conditions" value="Psychiatrist">Psychiatrist</option>
          <option title="Issues related to urinary system" value="Urologist">Urologist</option>                
        </select>
        <br><br><br>
        <input type="reset" value="Reset" class="w3-btn" style="background-color: #05193e;color:white;font-size: 20px;padding: 10px 15px;width: 10%;margin-left: 670px;margin-bottom: 10px">
        <input type="submit" value="Submit" class="w3-btn" style="background-color: #05193e;color:white;font-size: 20px;padding: 10px 15px;width: 10%;margin-left: 90px;margin-bottom: 10px">
      </form>
   </div>
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
</body>
</html> 

