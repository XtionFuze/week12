<?php 
$servername = "localhost";
$username = "xtionfuze";
$password = "";
$dbname = "c9";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}

//echo "Connection Successful";

// Query Database
$sql = "SELECT * FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output Data of Each Row
    while ($row = $result->fetch_assoc()) {
        echo "Name: ".$row["first_name"]."<br>";
    }
}

?>