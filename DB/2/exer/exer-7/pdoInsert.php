<?php
$servername = "localhost";
$username = "root";
$password = "root";

//Name of schema
$dbname = "slide01Joins";

//values to set
$department_id = 111;
$name = "Backend";
$location = "Russia";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sth = $conn->prepare("INSERT INTO Department (department_id, name, location) Values(:department_id, :name, :location)");
$sth->bindParam(':department_id', $department_id);
$sth->bindParam(':name', $name);
$sth->bindParam(':location', $location);

$sth->execute();
echo 'YOU DID IT';

?>