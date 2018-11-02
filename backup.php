<?php
$servername = "localhost";
$username = "zeromile";
$password = "";
$dbname = "c9";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
//echo "Connected successfully, yo";
// Get table records
$sql = "SELECT * FROM people";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo $row["first_name"]." ".$row["last_name"].", favorite color: ".$row["fav_color"]."<br/>";        echo "<a href=".$row["link"].">".$row["title"]."</a>";
    }
} else {
    echo "No results";
}
$conn->close();
