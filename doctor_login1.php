<?php
    session_start();
    $usr=$_SESSION['Username'];
    $conn=mysqli_connect("localhost","root","sarthak2007","SOC");
    
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    
    $sql="select Name,Specialist,Image from doctor where LicenseID='$usr'";
    
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $name=$row['Name'];
    $spec=$row['Specialist'];
    $img=$row['Image'];
?>
<html>
<head>
    <title>First Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script> 
       $(document).ready(function(){
         $("#flip").click(function(){
           $("#panel").slideToggle("slow");
           });
         });
        $(document).ready(function(){
         $("#flip1").click(function(){
           $("#panel1").slideToggle("slow");
           });
         });
        $(document).ready(function(){
         $("#flip2").click(function(){
           $("#panel2").slideToggle("slow");
           });
         });
        $(document).ready(function(){
         $("#flip3").click(function(){
           $("#panel3").slideToggle("slow");
           });
         });
    </script>
    
<style> 
#panel,#flip,#panel1,#flip1,#panel2,#flip2,#flip3,#panel3 {
    padding: 5px;
    text-align: center;
    background-color: #ffffff;
    border: solid 1px #c3c3c3;
}

#panel,#panel1,#panel2,#panel3 {
    padding: 50px;
    display: none;
}
div.boxes{
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 15px 15px 0;
    color: #686f7a;
    text-align: center;
    -webkit-box-shadow: 0 8px 6px -6px black;
    -moz-box-shadow: 0 8px 6px -6px black;
    box-shadow: 0 8px 6px -6px black;
    border-radius: 10px;
}
div.intro{
    color: #fff;
    background-color: #29303b;
}
</style>   
</head>
<body style="background-color: #f2f3f5;">
<div id="intro" class="intro" style="left: 0px;">
     <?php echo "<img src='".$img."' style='position: absolute;height:200px;width:150px;right:100px;top:30px;'/>"; ?>
     <h1>&nbsp&nbsp&nbsp&nbsp&nbsp Name:  <?php echo $name;  ?></h1>
     <h1>&nbsp&nbsp&nbsp&nbsp&nbsp Qualification: <?php echo $spec;  ?></h1>
     <br><br><br><br><br><br><br><br><br>
</div><br><br><br><br>
<center>
<div id="flip" style="text-align:center;font-size: 50px;width: 70%;align-self: center;color: #555555;font-family:Arial Unicode MS" class="boxes">NEW PATIENT</div>
<div id="panel" style="width: 65%;" class="boxes">
    <form style="font-size: 30px;">
        ADDHAR NUMBER:<input type="text" style="height: 50px;width: 300px;border-radius: 5px;size:45px">
        <br><br>
        <input type="submit" value="SUBMIT" style="width: 100px;height: 50px;border-radius: 10px;color: grey;font-size: 20px;">
    </form>
</div><br>
<div id="flip1" style="background-color: white;text-align:center;font-size: 50px;width: 70%;align-self: center;color: #555555;font-family:Arial Unicode MS" class="boxes">CURRENT PATIENTS</div>
<div id="panel1" style="width: 65%;" class="boxes">
    <br><br><br><br>
</div><br>
<div id="flip2" style="text-align:center;font-size: 50px;width: 70%;align-self: center;color: #555555;font-family:Arial Unicode MS" class="boxes">SOLVED CASES</div>
<div id="panel2" style="width: 65%;" class="boxes">
    <br><br><br><br>
</div><br>
<div id="flip3" style="text-align:center;font-size: 50px;width: 70%;align-self: center;color: #555555;font-family:Arial Unicode MS" class="boxes">REFERED CASES</div>
<div id="panel3" style="width: 65%;" class="boxes">
    <br><br><br><br>
</div>
</center>

</body>
</html>