<?php
$a=$_POST['search'];
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
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
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
    margin-left: 15px;
} 
</style>
<script>
  $(document).ready(function(){
      <?php 
        $conn = mysqli_connect("localhost","root","sarthak2007","SOC");
        $sql = "SELECT * FROM questions where Question LIKE '%".$a."%'";
        $result = mysqli_query($conn, $sql);
        $q=mysqli_num_rows($result);
        $X=2*$q-1;
        $Y=2*$q;
        mysqli_close($conn);
      ?>
      for(var i=1;i<=<?php echo $X; ?>;i+=2){
        $("#"+i).click(function(){
            //document.write(i);
             $(this).nextUntil("input[type='text']").slideToggle(1000);
        });
      }
      for(var i=2;i<=<?php echo $Y; ?>;i+=2){
        $("#"+i).click(function(){
             $(this).siblings("textarea").slideToggle(1000);
             $(this).siblings("input[type='submit']").slideToggle(1000);
        });
      }
  });
</script>
</head>
<body style="background-image:url('pic8.jpg');background-repeat:repeat;background-size: cover" class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align w3-large" style="background-color:black">

  <a href="medorad.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-theme-d5"><b><span style="font-size:18px">MEDORA</span></b></a>
  <a href="final.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5"><i class="fa fa-home w3-margin-right"></i>HOME</a>
  <a href="as_doc.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-right w3-theme-d5"><i class="fa fa-sign-out w3-margin-right"></i>LOGOUT</a>
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
      <div class="w3-card w3-round w3-white" style="position:fixed;left:80px;top:90px;width:350px;">
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
          $sql = "SELECT * FROM questions where Question LIKE '%".$a."%' order by Sno desc";
          $result = mysqli_query($conn, $sql);
          //$q=mysqli_num_rows($result);
          $countq=0;
          if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)) {
              $countq++;
              $a=2*$countq -1 ;
              $b=2*$countq;
              $sql="SELECT * FROM answer".$row['Sno']." order by Sno desc";
              $ans = mysqli_query($conn, $sql);            
              if($row['Person']=='P'){
                $sql1 = "SELECT * FROM patient where AADHAR='".$row['Aadhar']."'";
                $pat=mysqli_query($conn,$sql1);
                $rowp=mysqli_fetch_assoc($pat);
                echo "<form action='answerc.php' method='post' ><div>
                    <button type='button' class='w3-button w3-xlarge w3-circle w3-theme-d5' style='background-color: #05193e;float:right' id='$b'><i class='fa fa-pencil'></i></button>
                    <div class='w3-container w3-card w3-white w3-round w3-margin w3-padding-large'  id='$a'><br>
                    <img src='".$rowp['image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px;float:left;'>
                    <span>Name:  ".$rowp['Name']."<br>Category:  ".$row['Category']."</span>
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
                echo "<form action='answerc.php' method='post' ><div>
                    <button type='button' class='w3-button w3-xlarge w3-circle w3-theme-d5' style='background-color: #05193e;float:right' id='$b'><i class='fa fa-pencil'></i></button>
                    <div class='w3-container w3-card w3-white w3-round w3-margin w3-padding-large'  id='$a'><br>
                    <img src='".$rowd['Image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px;float:left;'>
                    <span>Name:  ".$rowd['Name']."<br>Category:  ".$row['Category']."</span><span style='float:right'>Specialist:  ".$rowd['Specialist']."</span>
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
                echo "<div class='w3-container w3-card w3-white w3-round w3-margin' style='display:none'><br>
                      <img src='".$answd['Image']."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px;float:left;'>
                      <span>Name: ".$answd['Name']."<br>Specialist:  ".$answd['Specialist']."</span>
                      <br><br><br><br>
                      <span style='font-size: 18px;text-align: justify;display: inline-block;''>".stripslashes($answer['Answer'])."
                      <br></span>
                      <hr class='w3-clear'>
                      <div><span class='w3-left w3-opacity'>".$answer['Date']."</span></div>        
                    </div>";
              }       



              
              echo "<input type='text' name='sno' value='".$row['Sno']."' style='display:none;'><input type='text' name='a' value='1' style='display:none;'>
                    <textarea placeholder='Add your answer...' style='display: none;' name='answer' ></textarea>
                      <input type='submit' value='submit' class='w3-btn' style='background-color: #05193e;color:white;font-size: 20px;padding: 10px 15px;width: 10%;margin-left: 390px;margin-top: 10px;display: none;' >
                    </div></form><br>";

            }
          }
          else{
            echo"<center>
          <div class='w3-container w3-card w3-white w3-round w3-margin w3-padding-large' style='width:30%'><br>
          <center>
          <span style='font-size: 18px;text-align: justify;display: inline-block;align=center;''><b>No Questions Found</b><br></span>
           </center></div></center>";
          }
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

