
<!----------SESSION START------------------>
<?php 
session_start();
?>

<!------------MAIN HTML PAGE------------------->

<!DOCTYPE html>
<html>
<head>

<!----for qualification icon--->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--------speciality icon------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!---------------PIE CHART-------------------->


//function for counting the respective no of patients

<!-------------------Basic css from w3 school------------------>



<style>

 /*------thats the table style---*/

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}



</style>

<!-------------positioning of piechart-------------------->

<style>
#chartContainer{
position:fixed;
top:390px;
}

body {
    background-image: url("bkg2e.jpg");
    background-repeat: repeat-x;
    background-size: 100% 100%;
}

</style>

</head>
<!---------------------------------------MAIN BODY STARTS FROM HERE--------------------------------->

<body class="w3-theme-l5">

<!-- Navbar -- the LOG OUT BUTTON-->
<div class="w3-top" style="position: fixed;">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" >
    <a href="sarthak.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" ><i class="fa fa-home w3-margin-right" ></i>Log Out</a>
 </div>
 </div>


<!----------------------------PROFILE PART---------->

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px" >    
  <!-- The Grid -->
  <div class="w3-row" >
    <!-- Left Column -->
    <div class="w3-col m3" >
      <!-- Profile -->
      <div class="w3-card w3-round w3-white" style="position: fixed;width: 22%;left:5%;margin-top:0.8%;" id="profile">
        <div class="w3-container" >
         <h2 class="w3-center">Lab's Profile</h2>
         
<p class='w3-center'><img src='a_img.jpg' style='top:10px;height:116px;width:106px;' alt='no image'></p>
                        <hr>
                        <i class='fa fa-pencil' style='font-size:24px;color: #666666'></i><pp style='position:relative;color: #666666;left:3%;'>LABROTARY'S NAME: NIGGA</pp>
                        <br><br>
                        <i class='fa-fa-address-book-o' style='font-size:24px;color: #666666'></i><pp style='position:relative;color: #666666;left:4.7%;'>ADDRESS : NANKAARI</pp>
                        <br><br>
                        <i class='fa fa-pencil' style='font-size:24px;color: #666666'></i><pp style='position:relative;color: #666666;left:3%;'>CONTACT DETAILS : 6996</pp>
                        <br>
                        <br><br>


      </div>
    </div>
  <br>
      
      <!-- Accordion -->
        
      <br>
     </div>

<!------------------------------------------NEW PATIENTS------------------------------------------------------->  
<div class="w3-col m7" style="width: 75%;">

      <div class="w3-container w3-card w3-white w3-round w3-margin" id="curnt"><br>
        <img src="curr.png"  style="width:60px;float: left;">
        <h2 align="center">NEW PATIENT</h2>
        <hr class="w3-clear">
        <form action="ven1.php" method="post">
          <center>
            ENTER AADHAR NUMBER: <input type="text" name='aadhar_no'>
            <br>
            <br>
            ENTER SERIAL NUMBER: <input type="text" name='serial_no'>
            <br>
            <br>
            <input type="submit" value="SUBMIT" class="w3-button w3-theme-d1 w3-margin-bottom" style="border-radius: 10px;">
          </center>
        </form>
        <br>
          <div class="w3-row-padding" style="margin:0 -16px">
            
            
        </div> 
      </div>
<hr>
<!--------------------------------------CURRENT PATIENTS------------------------------------------------------->
      <div class="w3-container w3-card w3-white w3-round w3-margin" id="curnt"><br>
        <img src="new_patient2png.png"  style="width:60px;float: left;">
        <h2 align="center">CURRENT PATIENT</h2>
        <hr class="w3-clear">
        <form action="param2.php" method="post">
          <center>
            ENTER AADHAR NUMBER: <input type="text" name='aadhar_no'>
            <br>
            <br>
            ENTER SERIAL NUMBER: <input type="text" name='aadhar_no'>
            <br>
            <br>
            <input type="submit" value="SUBMIT" class="w3-button w3-theme-d1 w3-margin-bottom" style="border-radius: 10px;">
          </center>
        </form>
        <br>
          <div class="w3-row-padding" style="margin:0 -16px">
            
            
        </div> 
      </div>
<hr>

<!--------------------------UPLOAD FILE-------------------------------------------------------->
<div class="w3-container w3-card w3-white w3-round w3-margin" id="curnt"><br>
        <img src="upload.png"  style="width:60px;float: left;">
        <h2 align="center">UPLOAD FILE</h2>
        <hr class="w3-clear">
        <form action="upl.php" method="post" enctype="multipart/form-data">
          <center>
            ENTER AADHAR NUMBER: <input type="text" name='aadhar_no'>
            <br>
            <br>
            <pp style="position:relative;left:0.3%;">ENTER SERIAL NUMBER:</pp> <input type="text" style="position:relative;left:0.5%;" name='serial_no'>
            <br>
            <br>
            <pp style="position:relative;left:-5.3%;">UPLOAD FILE:</pp> <input type="file" name='UploadFileField' id="UploadFileField" style="position:relative;left:18%;top:-25px;">
            <input type="submit" value="Upload Image" class="w3-button w3-theme-d1 w3-margin-bottom" style="border-radius: 10px;">
          </center>
        </form>
        <br>
          <div class="w3-row-padding" style="margin:0 -16px">
            
            
        </div> 
      </div>
</div>

</body>
</html>