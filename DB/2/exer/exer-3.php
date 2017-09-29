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

// $sql = "SELECT avg(LifeExpectancy),  FROM country";
// $sql = "SELECT avg(SurfaceArea) FROM country WHERE Continent='Asia' ";

// $sql = "SELECT count(Capital) FROM country";
// $sql = "SELECT count(Region) FROM country WHERE Continent='Asia'";

// $sql = "SELECT MAX(SurfaceArea) FROM country ORDER BY SurfaceArea DESC";
// $sql = "SELECT MAX(Population), name FROM country WHERE Continent='Europe' GROUP BY name DESC ";

// $sql = "SELECT sum(Capital) FROM country WHERE Continent='Africa'";
// $sql = "SELECT SUM(Population) FROM city WHERE name='London'";

// $sql = "SELECT MAX(Population), name FROM country WHERE Continent='Asia' GROUP BY Capital";
// $sql = "SELECT Name, capital, Population FROM country WHERE Continent='Asia' GROUP BY Population DESC";

$result = $conn->query($sql);

$row = $result->fetch_all();

echo "<pre>";
print_r($row);
echo "</pre>";


$conn->close();

?>