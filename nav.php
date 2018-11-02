<?php
echo "<ul class='nav'>";
// Get table records
$sql = "SELECT * FROM nav";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()){
        //echo $row["id"]." ".$row["title"]." ".$row["link"]."<br/>";   
        echo "<li class='nav-item'><a class='nav-link' href='".$row["link"]."'>".$row["title"]."</a></li>";   
    }
} else {
    echo "No results";
}
echo "</ul>";
$conn->close();
?>