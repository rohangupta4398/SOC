<?php
session_start();
if(!isset($_SESSION['Aadhar']))
  header('Location:as_patient.php');
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
$Aadhar=$_SESSION['Aadhar'];
$sql = "SELECT * FROM patient where AADHAR='".$Aadhar."'";
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
<link rel="icon" type="image/png" href="medhelp blue.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<script>
  $(document).ready(function(){
      <?php 
        $conn = mysqli_connect("localhost","root","sarthak2007","SOC");
        $sql = "SELECT * FROM questions";
        $result = mysqli_query($conn, $sql);
        $q=mysqli_num_rows($result);
        mysqli_close($conn);
      ?>
      for(var i=1;i<=<?php echo $q; ?>;i++){
        $("#"+i).click(function(){
             $(this).nextUntil("br").slideToggle(1000);
        });
      }
  });
  
</script>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align w3-large" style="background-color:black;">
  <span style='position: relative;height: 100%;width: 3%;float: left;vertical-align: middle;'><a href='index.php' class="w3-bar-item w3-padding-large w3-theme-d5 w3-left" style="position: relative;text-decoration: none;width: 20%;vertical-align: middle;"><img src='medhelp blue.png' style='height: 22px;width: 22px;float: left;vertical-align: middle;margin-top:4px 
    '></span></a>
  <a href="medorap.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5"><b><span style="font-size:18px">MEDORA</span></b></a>
  <a href="patient_profile.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5"><i class="fa fa-home w3-margin-right"></i>HOME</a>

  <div class="w3-dropdown-hover w3-hide-small w3-theme-d5">
    <?php
        $conn = mysqli_connect("localhost","root","sarthak2007","SOC");
        $sql="CREATE TABLE Notifications(Sno int,SSno int,Date timestamp,Y varchar(3))";
        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM questions where Aadhar='".$_SESSION['Aadhar']."'";
        $result = mysqli_query($conn, $sql);
        while($row1 = mysqli_fetch_assoc($result)) {      
          $sql="SELECT * FROM  answer".$row1['Sno'];
          $result1=mysqli_query($conn,$sql);
          while($row2=mysqli_fetch_assoc($result1)){
            $sql="INSERT INTO Notifications values(".$row1['Sno'].",".$row2['Sno'].",'".$row2['Date']."','".$row2['Y']."')";
            mysqli_query($conn,$sql);
          }
        }
        $sql="SELECT * FROM Notifications";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==0){
           echo "<button class='w3-button w3-padding-large w3-hover-white'><i class='fa fa-bell'></i>NOTIFICATIONS</button>";
           echo "<div class='w3-dropdown-content w3-card-4 w3-bar-block' style='width:250px;overflow-y:scroll;max-height:500px'>";
           echo "<button type='button' class='w3-button  w3-bar-item' style='border-top:0.5px solid lightgrey;border-bottom:0.5px solid lightgrey;' >NO NOTIFICATIONS</button>";
        }
        else{
          $sql="SELECT * FROM Notifications where Y='N'";
          $result=mysqli_query($conn,$sql);
          $q=mysqli_num_rows($result);
          if($q==0)
            echo "<button class='w3-button w3-padding-large w3-hover-white'><i class='fa fa-bell'></i>NOTIFICATIONS</button>";
          else  
            echo "<button class='w3-button w3-padding-large w3-hover-white'><i class='fa fa-bell'></i><span class='w3-badge w3-margin-right w3-small w3-red'>".$q."</span>NOTIFICATIONS</button>";
          $sql="SELECT * FROM Notifications ORDER BY Date DESC";
          $result=mysqli_query($conn,$sql);
          echo "<div class='w3-dropdown-content w3-card-4 w3-bar-block' style='width:500px;overflow-y:scroll;max-height:500px'>";
          while($row1=mysqli_fetch_assoc($result)){
            $sql="SELECT * FROM answer".$row1['Sno']." where Sno=".$row1['SSno']."";
            $result1=mysqli_query($conn,$sql);
            $row2=mysqli_fetch_assoc($result1);
            $sql="SELECT * FROM doctor where LicenseID='".$row2['LIC']."'";
            $result1=mysqli_query($conn,$sql);
            $row3=mysqli_fetch_assoc($result1);
            $sql="SELECT * FROM questions where Sno=".$row1['Sno']."";
            $result1=mysqli_query($conn,$sql);
            $row4=mysqli_fetch_assoc($result1);
            if($row1['Y']=='N')
              echo "<button type='button' class='w3-button  w3-bar-item' style='background-color: #c2d4dd;border-top:0.5px solid lightgrey;border-bottom:0.5px solid lightgrey;' onclick='g(".$row1['Sno'].",".$row1['SSno'].");'><img src='".$row3['Image']."' alt='Avatar' class='w3-circle' style='width:60px;float:left;'>Dr. ".$row3['Name']." answered your question related to ".$row4['Category']."<br><span class='w3-left w3-opacity' style='float:right'>".$row1['Date']."</span></button>";
            else
              echo "<button type='button' class='w3-button  w3-bar-item' style='border-top:0.5px solid lightgrey;border-bottom:0.5px solid lightgrey;' onclick='g(".$row1['Sno'].",".$row1['SSno'].");'><img src='".$row3['Image']."' alt='Avatar' class='w3-circle' style='width:60px;float:left;'>Dr. ".$row3['Name']." answered your question related to ".$row4['Category']."<br><span class='w3-left w3-opacity' style='float:right'>".$row1['Date']."</span></button>";
          }
        }
        $sql="DROP TABLE Notifications";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    ?> 


    </div>
  </div>

  <div class="w3-dropdown-hover w3-hide-small w3-theme-d5" >
    <button class="w3-button w3-padding-large w3-hover-white" title="Category"><i class="fa fa-bars"></i>CATEGORY</button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px;overflow-y:scroll;max-height:500px">
      <input type="button" value="Audiologist" onclick="f('Audiologist');" class="w3-bar-item w3-button" title="Ear related issues">
      <input type="button" value="Allergist" onclick="f('Allergist');"  class="w3-bar-item w3-button" title="Issues related to allergies">
      <input type="button" value="Cardiologist" onclick="f('Cardiologist');"  class="w3-bar-item w3-button" title="Heart related issues">
      <input type="button" value="Dentist" onclick="f('Dentist');"  class="w3-bar-item w3-button" title="Teeth related issues">
      <input type="button" value="Dermatologist" onclick="f('Dermatologist');" class="w3-bar-item w3-button" title="Skin related issues">
      <input type="button" value="Endocrinologist" onclick="f('Endocrinologist');"  class="w3-bar-item w3-button" title="Hormone related issues">
      <input type="button" value="ENT Specialist" onclick="f('ENT Specialist');"  class="w3-bar-item w3-button" title="Issues related to ear,nose and throat">
      <input type="button" value="Gynecologist" onclick="f('Gynecologist');"  class="w3-bar-item w3-button" title="Female related issues">
      <input type="button" value="Immunologist" onclick="f('Immunologist');"  class="w3-bar-item w3-button" title="Issues related to immune system">
      <input type="button" value="Medical Geneticist" onclick="f('Medical Geneticist');"  class="w3-bar-item w3-button" title="Diseases related to genetic disorders">
      <input type="button" value="Miscellaneous" onclick="f('Miscellaneous');"  class="w3-bar-item w3-button" title="Any general question">
      <input type="button" value="Neonatologists" onclick="f('Neonatologists');"  class="w3-bar-item w3-button" title="Diseases related to new born infants">
      <input type="button" value="Neurologists" onclick="f('Neurologists');"  class="w3-bar-item w3-button" title="Illness related to brain">
      <input type="button" value="Oncologist" onclick="f('Oncologist');"  class="w3-bar-item w3-button" title="Related to cancer">
      <input type="button" value="Orthopedic Surgeon" onclick="f('Orthopedic Surgeon');"  class="w3-bar-item w3-button" title="Issues related to skeletal system">
      <input type="button" value="Pediatrician" onclick="f('Pediatrician');"  class="w3-bar-item w3-button" title="Issues related to infants and children">
      <input type="button" value="Physiologist" onclick="f('Physiologist');"  class="w3-bar-item w3-button" title="Issues related to body">
      <input type="button" value="Podiatrist" onclick="f('Podiatrist');"  class="w3-bar-item w3-button" title="Issues related to foot">
      <input type="button" value="Psychiatrist" onclick="f('Psychiatrist');"  class="w3-bar-item w3-button" title="Issues related to mental and behaviourial conditions">
      <input type="button" value="Urologist" onclick="f('Urologist');"  class="w3-bar-item w3-button" title="Issues related to urinary system">
    </div>
  </div>
  <a href="questionp.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-theme-d5"><i class="fa fa-plus w3-margin-right"></i>ASK A QUESTION</a>
  <a href="as_patient.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-right w3-theme-d5"><i class="fa fa-sign-out w3-margin-right"></i>LOGOUT</a>
  

  <div>
    <form action="searchp.php" method="post">
         
        <button onmouseover="this.style.backgroundColor='#ccc'" onmouseout="this.style.backgroundColor='#ddd'"type='submit' style='float:left; padding: 6px 10px;margin-top: 8px;background: #ddd;font-size: 17px;  border: none;  cursor: pointer;'><i class='fa fa-search'></i></button>
        <input type="text" style="padding: 6px;margin-top: 8px;font-size: 17px;border: none;width:30%;" name='search'placeholder="Search By Disease">
      
    </form>
  </div>

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
         <p class="w3-center"><img src="<?php echo $row['image']; ?>" class="w3-circle" style="height:150px;width:110px;" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>Name: </strong><?php echo $row["Name"]; ?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><strong>Age: </strong><?php echo $row["AGE"]; ?></p>
         <p><i class="fa fa-venus-mars fa-fw w3-margin-right w3-text-theme"></i><strong>Sex: </strong><?php echo $row["SEX"]; ?></p>
         <p><i class="fa fa-inr fa-fw w3-margin-right w3-text-theme"></i><strong>Marital Status: </strong><?php echo $row["MARITAL STATUS"]; ?></p>
         <p><i class="fa fa-comment-o fa-fw w3-margin-right w3-text-theme"></i><strong>Comments: </strong><?php echo $row["COMMENTS"]; ?></p>
         <p><i class="fa fa-comment-o fa-fw w3-margin-right w3-text-theme"></i><strong>Blood Group: </strong><?php echo $row["BLOODGROUP"]; ?></p>
        </div>
      </div>
      <br>
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
      <?php
          $conn = mysqli_connect("localhost","root","sarthak2007","SOC");
          $sql = "SELECT * FROM questions order by Sno desc";
          $result = mysqli_query($conn, $sql);
          //$q=mysqli_num_rows($result);
          $countq=0;
          while($row = mysqli_fetch_assoc($result)) {
            $countq++;
            $sql="SELECT * FROM answer".$row['Sno']." order by Sno desc" ;
            $ans = mysqli_query($conn, $sql);            
            if($row['Person']=='P'){
              $sql1 = "SELECT * FROM patient where AADHAR='".$row['Aadhar']."'";
              $pat=mysqli_query($conn,$sql1);
              $rowp=mysqli_fetch_assoc($pat);
              echo "<div class='w3-container w3-card w3-round w3-margin w3-padding-large' style='background-color:  rgba(255, 255, 255, 0.65);color:black' id='$countq'><br>
                  <img src='".$rowp['image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:80px;float:left;'>
                  <span>Name:".$rowp['Name']."<br>Category:".$row['Category']."</span>
                  <br><br><br><br>
                  <h4 style='font-size: 20px;text-align: justify;display: inline-block;' ><b>".stripslashes($row['Question'])."</h4><br></b>
                  <hr class='w3-clear'>
                  <p><span class='w3-left w3-opacity'>".$row['Date']."</span><span class='w3-right w3-opacity'>No. of answers:".mysqli_num_rows($ans)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></p>        
                  </div>";
            }
            else{
              $sql2 = "SELECT * FROM doctor where LicenseID='".$row['LIC']."'";
              $doc=mysqli_query($conn,$sql2);
              $rowd=mysqli_fetch_assoc($doc);
              echo "<div class='w3-container w3-card w3-round w3-margin w3-padding-large' style='background-color:  rgba(255, 255, 255, 0.65);color:black' id='$countq'><br>
                  <img src='".$rowd['Image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px;float:left;'>
                  <span>Name:".$rowd['Name']."<br>Category:".$row['Category']."</span><span style='float:right'>Specialist:".$rowd['Specialist']."</span>
                  <br><br><br><br>
                  <h4 style='font-size: 20px;text-align: justify;display: inline-block;' ><b>".stripslashes($row['Question'])."</h4><br></b>
                  <hr class='w3-clear'>
                  <p><span class='w3-left w3-opacity'>".$row['Date']."</span><span class='w3-right w3-opacity'>No. of answers:".mysqli_num_rows($ans)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></p>        
                  </div>";
            }
            while($answer = mysqli_fetch_assoc($ans)){
              $sql2 = "SELECT * FROM doctor where LicenseID='".$answer['LIC']."'";
              $ansd=mysqli_query($conn,$sql2);
              $answd=mysqli_fetch_assoc($ansd);
              echo "<div class='w3-container w3-card w3-round w3-margin' style='display:none;background-color:  rgba(255, 255, 255, 0.65);color:black'><br>
                    <img src='".$answd['Image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px;float:left;'>
                    <span>Name:".$answd['Name']."<br>Specialist:".$answd['Specialist']."</span>
                    <br><br><br><br>
                    <span style='font-size: 18px;text-align: justify;display: inline-block;''>".stripslashes($answer['Answer'])."
                    <br></span>
                    <hr class='w3-clear'>
                    <div><span class='w3-left w3-opacity'>".$answer['Date']."</span></div>        
                  </div>";




            }

            echo "<br>";

          }

          mysqli_close($conn);
      ?>
    <!-- End Middle Column -->
    </div>
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<script>
  function f(cat){
    var xml=new XMLHttpRequest();
    xml.onreadystatechange=function(){

      if(this.readyState==4 && this.status==200){
        
          window.top.location.href = "Categoryp.php";
        
      }

    };
    xml.open("POST","categoryp.php?firstname="+cat,true);
    xml.send();
  }
  function g(a,b){
    var xml=new XMLHttpRequest();
    xml.onreadystatechange=function(){

      if(this.readyState==4 && this.status==200){
        
          window.top.location.href = "Notip.php";
        
      }

    };
    xml.open("POST","notip.php?first="+a+"&second="+b,true);
    xml.send();
  }
</script>
</body>
</html> 

