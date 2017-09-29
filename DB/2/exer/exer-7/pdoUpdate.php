<?php
$servername = "localhost";
$username = "root";
$password = "root";

//Name of schema
$dbname = "slide01Joins";

//Updated values to set
$department_id = 111;
$name = "Front end";
$location = "North Korea";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sth = $conn->prepare("UPDATE Department SET name = :name, location = :location
WHERE department_id = :department_id");

$sth->bindParam(':department_id', $department_id);
$sth->bindParam(':name', $name);
$sth->bindParam(':location', $location);

$sth->execute();
echo 'YOU DID IT';

?>