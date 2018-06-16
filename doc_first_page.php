
   COPY IT IN THE MAIN PART UNDER HEAD 

	<style>
	table.w3-table-all {
    margin: 20px 0;
}
.w3-table-all {
    border: 1px solid #ccc;
}
.w3-table, .w3-table-all {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    display: table;
}
*, ::before, ::after {
    box-sizing: inherit;
}
.w3-white, .w3-hover-white:hover {
    color: #000 !important;
}
.w3-light-grey, .w3-hover-light-grey:hover, .w3-light-gray, .w3-hover-light-gray:hover {
    color: #000 !important;
}
html, body {
    font-family: Verdana,sans-serif;
    font-size: 15px;
    line-height: 1.5;
}
tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}
</style>


    COPY IT TO THE DIVISION HAVING ID PANE ID

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "doc_current_cases";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table_name=$_SESSION['username']."current";
$sql = "SELECT *FROM ".$table_name;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class="w3-table-all notranslate" style="text-align: center"><tr><th>NAME</th><th>DISEASE DIAGNOSED</th><th>SEVERITY</th></tr>"
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["disease"]. "</td><td>" . $row["severity"]. "</td></tr>";
    }
    echo "</table>"
} else {
    echo "No Patient ";
}
$conn->close();
?> 

    COPY IT TO THE DIVISION HAVING ID PANE2 ID

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "doc_completed_cases";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table_name=$_SESSION['username'];
$sql = "SELECT *FROM ".$table_name;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class="w3-table-all notranslate" style="text-align: center"><tr><th>NAME</th><th>DISEASE DIAGNOSED</th><th>DISCHARGE DATE</th></tr>"
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["disease"]. "</td><td>" . $row["discharge_date"]. "</td></tr>";
    }
    echo "</table>"
} else {
    echo "No Patient ";
}
$conn->close();
?> 

    COPY IT TO THE DIVISION HAVING ID PANE3 ID

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "doc_refered_cases";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table_name=$_SESSION['username']."refered";
$sql = "SELECT *FROM ".$table_name;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class="w3-table-all notranslate" style="text-align: center"><tr><th>NAME</th><th>DISEASE DIAGNOSED</th><th>DISCHARGE DATE</th></tr>"
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>"  . $row["discharge_date"]. "</td></tr>";
    }
    echo "</table>"
} else {
    echo "No Patient ";
}
$conn->close();
?> 