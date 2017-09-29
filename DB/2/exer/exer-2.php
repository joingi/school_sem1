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
// -   Cities with more than 1 million citizens.
// $sql = "SELECT name, population FROM city WHERE population > 1000000 ORDER BY population DESC";

// -   Countries with life expectancy less than 74 years
// $sql = "SELECT name, LifeExpectancy FROM country WHERE LifeExpectancy < 74 ORDER BY LifeExpectancy DESC";

// -   Cities with number of citizens between 2 and 3 million
// $sql = "SELECT name, population FROM city WHERE population BETWEEN '2000000' AND '3000000'";

// -   Countries which start with the letter R or later in the alphabet
// $sql = "SELECT name FROM country WHERE name LIKE 'R%'";

// -   Do question 3, sorted by Population
$sql = "SELECT name, population FROM city WHERE population BETWEEN '2000000' AND '3000000' ORDER BY population DESC";

$result = $conn->query($sql);

$row = $result->fetch_all();

echo "<pre>";
print_r($row);
echo "</pre>";


$conn->close();

?>