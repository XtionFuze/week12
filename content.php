<?php
// Get table records
$sql = "SELECT * FROM content WHERE id=".$pageid;
$result = $conn->query($sql);
if ($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo $row["content"];   

    }
} else {
    echo "No results";
}

//$conn->close();
?>