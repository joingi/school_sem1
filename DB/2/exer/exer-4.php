<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "slide0104world";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_errror);
}

// UPDATE
// $sql = "UPDATE city
// SET Name = 'Den Haag'
// WHERE id = 129";

// REPLACE
// $sql = "REPLACE city (Name) VALUES ('Vallensbæk')";

// DELETE
// $sql = "DELETE FROM city
// WHERE Name = 'Kabul'";

$sql = "SELECT * FROM city";



// $conn->query($sql);
// echo 'Records Deleted successfully';


$result = $conn->query($sql);
$row = $result->fetch_all();

echo "<pre>";
print_r($row);
echo "</pre>";

$conn->close();

?>