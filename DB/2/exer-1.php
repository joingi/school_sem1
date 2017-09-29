<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Slide0101";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "INSERT INTO department (id, name, location)
VALUES (id, 'John John', 'Valencia'),
(id, 'Eric Cantona', 'Manchester'),
(id, 'Stalin', 'Berlin')";
// exec() because no results are returned
$conn->exec($sql);
echo "New record created successfully";

?>