<?php
//session_start();
//$adhar=$_SESSION['Aadhar'];
//$conn = new mysqli('localhost', 'root', 'sarthak2007', 'SOC');
//Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}

//$sql = "SELECT * FROM patient where Aadhar=".$adhar;
//$result=$conn->query($sql);
//$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<title>MedHelp Patient Pag</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-container[type=button]:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.qw
{

}
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body style="background-image:url('pic8.jpg');background-repeat:repeat;" class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div style="background-color: #35353F" class="w3-bar w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="as_doc.php" style="background-color: #35353F;color: white;position:relative;right:10px;" class="w3-bar-item w3-button w3-padding-large w3-hover-white"><i class="fa fa-home w3-margin-right"></i>Logout</a>
  <a href="#" style="background-color: #35353F;color: white;" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Forum"><i class="fa fa-globe"></i></a>
  <a href="#" style="background-color: #35353F;color: white;" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" style="background-color: #35353F;color: white;" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
 </div>
</div>


<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:60px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white" style="left:20px;top:70px;width:320px;position:fixed" type>
        <div class="w3-container"><p>
         <h4 class="w3-center">Patient's Profile</h4>
         <p class="w3-center"><img src="<?php echo $row['image'] ?>" class="w3-circle" style="height:106px;width:106px" alt="Image cannot be loaded"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>Name: </strong><?php echo $row['Name'] ?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><strong>Age: </strong><?php echo $row['AGE'] ?></p>
         <p><i class="fa fa-venus-mars fa-fw w3-margin-right w3-text-theme"></i><strong>Sex: </strong><?php echo $row['SEX'] ?></p>
         <p><i class="fa fa-inr fa-fw w3-margin-right w3-text-theme"></i><strong>Marital Status: </strong><?php echo $row['MARITAL STATUS'] ?></p>
         <p><i class="fa fa-comment-o fa-fw w3-margin-right w3-text-theme"></i><strong>Comments: </strong><?php echo $row['COMMENTS'] ?></p>
        </div>
      </div>
      <br>

<div class="w3-container w3-card w3-white w3-round w3-margin" id="bloodpressure" style="position:fixed;top:55px;right:20px;width:620px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<div class="w3-container w3-card w3-white w3-round w3-margin" id="sugarlevel" style="position:fixed;top:465px;right:20px;width:620px;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

      <div class="w3-row-padding w3-margin-bottom" style="position:absolute;width:1100px;left:365px;top:70px;">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16" type="button" style="width:250px;height:140px;">
        <div class="w3-left"><img src="med.png" style="height:45px;width:45px;color:white;"></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Prescriptions</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16" type="button" style="width:250px;height:140px;">
        <div class="w3-left"><img src="rec.png" style="height:45px;width:45px;color:white;"></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Medical History</h4>
      </div>
    </div>
    
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16" type="button" style="width:250px;height:140px;">
        <div class="w3-left"><img src="tick.png" style="height:45px;width:45px;color:white;"></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Close Case</h4>
      </div>
    </div>
  </div>
    
    <!-- End Left Column -->
    </div>

    
    <div class="w3-col m7">
    
      <br><br><br><br><br><br><br><br>
      <div class="w3-container w3-card w3-white w3-round w3-margin" style="position:relative;left:-217px;width:795px;height:450px;"><br>
        <img src="med.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:50px">
        <h4>Prescriptions</h4>
        <hr class="w3-clear">
        <form method="post" action="sub1.php">
        
        <div><pp>Medicines:</pp><input type="text" name="meds" style="position:relative;left:41px;width:422px;"></div>
        
        <div style="display:block;"><pp>Tests:</pp><input type="text" name="tests" style="position:relative;left:75px;width:422px;"></div>
        
        <div><pp>Symptoms:</pp><input type="text" name="symptoms" style="position:relative;left:37px;width:422px;vertical-align:middle;"></div><br>
        
        <div><pp>Blood Pressure:</pp><pp style="position:relative;left:20px;">Systolic:</pp><input type="text" name="systolic" placeholder="in mmHg" style="position:relative;left:25px;width:87px;vertical-align:middle;">
        
        <pp style="position:relative;left:60px;">Diastolic:</pp><input type="text" name="diastolic" value="<?php echo $diastolic;?>" placeholder="in mmHg" style="position:relative;left:65px;width:87px;vertical-align:middle;"></div><br>
        
        <div><pp>Height:</pp><input type="text" name="height" placeholder="in cm" style="position:relative;left:10px;width:65px;vertical-align:middle;"><pp style="position:relative;left:40px;">Weight:</pp><input type="text" name="weight" placeholder="in Kg" style="position:relative;left:50px;width:65px;vertical-align:middle;"></div>
        <br>
        <div><pp>Comments:</pp><input type="text" name="comment" style="position:relative;left:40px;width:422px;vertical-align:middle;"></div>
        <br><br>
        
        <button style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration:none;position:relative;left:300px;border-radius:20px;font-size:20px;"><i class="fa fa-send-o" ></i> Submit</button>
      </form>
      </div>
      
      <!-- <div class="w3-container w3-card w3-white w3-round w3-margin" style="position:relative;left:112px;width:1066px;height:300px;"><br>
        <img src="test.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:60px">
        
        <h4>Prescribed Tests</h4>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-eye" style="font-size:20px"></i>  Full View</button>
      </div>   -->

      <div class="w3-container w3-card w3-white w3-round w3-margin"  style="position:relative;left:-217px;width:795px;height:300px;"><br>
        <img src="rec.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:50px">
        <h4>Medical History</h4>
        <hr class="w3-clear">
        <div style="position:relative;top:20px;margin-left:135px;">
        <span style="font-size:22px;">Get History from:  </span><input type="text" style="left:5px;border-left:none;border-right:none;border-top:none;width:30px;height:20px;position:relative;font-size:20px;text-align:middle;" placeholder="DD"><span style="font-size:20px;position:relative;left:5px"> / </span> <input type="text" style="left:5px;border-left:none;border-right:none;border-top:none;width:36px;height:20px;position:relative;font-size:20px;vertical-align:middle;" placeholder="MM"><span style="font-size:20px;position:relative;left:5px;"> / </span> <input type="text" style="left:5px;border-left:none;border-right:none;border-top:none;width:47px;height:20px;position:relative;font-size:20px;vertical-align:middle;" placeholder="YYYY"><span style="position:relative;font-size:22px;left:10px;">    to:   </span><input type="text" style="left:10px;border-left:none;border-right:none;border-top:none;width:30px;height:20px;position:relative;font-size:20px;vertical-align:middle;" placeholder="DD"><span style="font-size:20px;position:relative;left:10px;"> / </span> <input type="text" style="left:10px;border-left:none;border-right:none;border-top:none;width:36px;height:20px;position:relative;font-size:20px;vertical-align:middle;" placeholder="MM"><span style="font-size:20px;position:relative;left:10px;"> / </span> <input type="text" style="left:10px;border-left:none;border-right:none;border-top:none;width:47px;height:20px;position:relative;font-size:20px;vertical-align:middle;" placeholder="YYYY">
      </div><br>
      <div style="position:relative;left:230px;top:55px;">
        <span style="font-size:22px;">With Disease:  </span><input type="text" style="left:5px;border-left:none;border-right:none;border-top:none;width:183px;height:20px;position:relative;font-size:20px;" placeholder="Select your Disease">
      </div>

      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"  style="position:relative;left:-217px;width:795px;height:330px;"><br>
        <form method="post" action="sub2.php">
        <img src="sugar.png" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:50px;">
        <h4>Sugar Level</h4>
        <hr class="w3-clear">
        <div style="position:relative;left:255px;"><span style="font-size:22px;">Blood Sugar Level:  </span><input type="text" name="sugar" style="border-left:none;border-right:none;border-top:none;width:84px;height:30px;position:relative;font-size:20px;left:5px;" placeholder="in mg/dL"></div><br>
        <div style="position:relative;left:210px;"><span style="font-size:22px;">Date:  </span><input type="text" style="border-left:none;border-right:none;border-top:none;width:30px;height:20px;position:relative;font-size:20px;" name="dd" placeholder="DD"><span style="font-size:20px;"> / </span> <input type="text" style="border-left:none;border-right:none;border-top:none;width:36px;height:20px;position:relative;font-size:20px;" name="MM" placeholder="MM"><span style="font-size:20px;"> / </span> <input type="text" style="border-left:none;border-right:none;border-top:none;width:47px;height:20px;position:relative;font-size:20px;" name="yy" placeholder="YYYY">
          <span style="font-size:22px;position:relative;left:10px;">Time:  </span><input type="text" name="hh" placeholder="HH" style="border-left:none;border-right:none;border-top:none;width:33px;font-size:20px;position:relative;left:10px;"><span style="font-size:22px;position:relative;left:10px;"> / </span><input type="text" placeholder="MM" name="mm" style="border-left:none;border-right:none;border-top:none;width:35px;font-size:20px;position:relative;left:10px;"></div>
        <button style="background-color:#4CAF50;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;position:relative;top:65px;left:300px;border-radius:20px;font-size:20px;"><i class="fa fa-send-o" ></i>Submit</button>
      </form>
      </div>
      
     <div class="w3-container w3-card w3-white w3-round w3-margin"  style="position:relative;left:-217px;width:795px;"><br>
        <img src="tick.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="vertical-align: middle;border-radius:0%;width:50px">
        <h4>Closed Cases</h4>
        <hr class="w3-clear">
     </div>
    <!-- End Middle Column -->
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Right Column -->
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer style="background-color:#35353F;padding:10px;">
 <la style="font-size: 20px;color: white;font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;">For any query,contact us at:</la>
  <i class="fa fa-facebook fa-fw w3-margin-right" style="font-size:20px;color:white;"></i>
  <i class="fa fa-instagram fa-fw w3-margin-right" style="font-size:20px;color:white;"></i>
  <i class="fa fa-google fa-fw w3-margin-right" style="font-size:20px;color:white;"></i>
</footer>


<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


</script>

<script>

window.onload = function () {

var chart1 = new CanvasJS.Chart("bloodpressure",{
  animationEnabled:true,
  zoomEnabled:true,
    title: {
    text: "Blood Pressure"
  },
  axisX: {
    valueFormatString: "hhTT DD MMM",
    labelAngle: -45,
  },
  axisY2: {
    gridThickness: 0.3,
      stripLines:[
    {                
      startValue:60,
      endValue:90,                
      color:"white"           
    },
        {
        startValue:140,
      endValue:90,
      color:"white"
        }
      ],
    suffix: "mmHg",
        interval: 30,
      gridColor: "black",
      minimum:20,
      maximum:180,
  },
  toolTip: {
    shared: true
  },
  legend: {
    cursor: "pointer",
    verticalAlign: "top",
    horizontalAlign: "center",
    dockInsidePlotArea: true,
  },
  data: [{
    type:"line",
    axisYType: "secondary",
    name: "Diastolic",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###mmHg",
    dataPoints: [
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1111";
      $dbname = "records";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
          
      $result = mysqli_query($conn, "SELECT * FROM asd");
          
      while($row = mysqli_fetch_array($result))
      {
        if(empty($row["systolic"])) continue;
        
        echo "{x: new Date('".$row["date_time"]."'), y:".$row["systolic"]." },";
      }
    ?>
    ]
  },
  {
    type: "line",
    axisYType: "secondary",
    name: "Systolic",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###mmHg",
    dataPoints: [
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1111";
      $dbname = "records";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
          
      $result = mysqli_query($conn, "SELECT * FROM asd");
          
      while($row = mysqli_fetch_array($result))
      {
        if(empty($row["diastolic"])) continue;
        
        echo "{ x:new Date('".$row["date_time"]."'), y:".$row["diastolic"]."},";
      }
    ?>
    ]
  }]
});

var chart2 = new CanvasJS.Chart("sugarlevel",{
    animationEnabled:true,
    zoomEnabled:true,
    title: {
    text: "Sugar Level",

  },
  axisX: {
    valueFormatString: "hhTT DD MMM",
    labelAngle: -45,
  },
  axisY2: {
    gridThickness: 0.3,
      stripLines:[
    {                
      startValue:60,
      endValue:90,                
      color:"white"           
    },
        {
        startValue:140,
      endValue:90,
      color:"white"
        }
      ],
    suffix: "mmol/dL",
        interval: 50,
      gridColor: "black",
      minimum:0,
      maximum:300,
  },
  toolTip: {
    shared: true,
    cornerRadius:10,
    animationEnabled:true,
  },
  
  data: [{
    type:"spline",
    axisYType: "secondary",
    lineColor:"#E17101",
    name: "Sugar Level",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###mmol/dL",
    dataPoints: [
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1111";
      $dbname = "records";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
          
      $result = mysqli_query($conn, "SELECT * FROM sugar");
          
      while($row = mysqli_fetch_array($result))
      {
        if(empty($row["sugar"])) continue;
        
        echo "{x:new Date('".$row["date_time"]."'),y:".$row["sugar"]."},";
      }
    ?>  
    ]
  }]
});
 
chart1.render();
chart2.render();
}
</script>

</body>
</html> 