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
?>