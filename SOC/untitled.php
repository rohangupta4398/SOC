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
    // <?php
    //   $servername = "localhost";
    //   $username = "root";
    //   $password = "1111";
    //   $dbname = "records";

    //   $conn = new mysqli($servername, $username, $password, $dbname);

    //   if ($conn->connect_error)
    //   {
    //     die("Connection failed: " . $conn->connect_error);
    //   }
          
    //   $result = mysqli_query($conn, "SELECT * FROM asd");
          
    //   while($row = mysqli_fetch_array($result))
    //   {
    //     if(empty($row["diastolic"])) continue;
        
    //     echo "{ x:new Date('".$row["date_time"]."'), y:".$row["diastolic"]."},";
    //   }
    // ?>
    
    { x:new Date(2018-05-05), y:50},
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
    // <?php
    //   $servername = "localhost";
    //   $username = "root";
    //   $password = "1111";
    //   $dbname = "records";

    //   $conn = new mysqli($servername, $username, $password, $dbname);

    //   if ($conn->connect_error)
    //   {
    //     die("Connection failed: " . $conn->connect_error);
    //   }
          
    //   $result = mysqli_query($conn, "SELECT * FROM sugar");
          
    //   while($row = mysqli_fetch_array($result))
    //   {
    //     if(empty($row["sugar"])) continue;
        
    //     echo "{x:new Date('".$row["date_time"]."'),y:".$row["sugar"]."},";
    //   }
    // ?>  

    {x:new Date(2018-05-05),y:50},
    ]
  }]
});
 
chart1.render();
chart2.render();
}