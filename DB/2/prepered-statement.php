<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "slide0102world";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_errror);
}

$sql = "SELECT count(LifeExpectancy), Name FROM country";
$result = $conn->query($sql);

// $row = $result->fetch_all();

// echo "<pre>";
// print_r($row);
// echo "</pre>";

if ($result->num_rows >= 0) {
    // Output each row
    while ($row = $result->fetch_assoc()) {
        echo "Avrage age: " . $row["LifeExpectancy"]. " - Name: " . $row["Name"].  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>