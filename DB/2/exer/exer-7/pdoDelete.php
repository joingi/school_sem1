<?php
$servername = "localhost";
$username = "root";
$password = "root";

//Name of schema
$dbname = "slide01Joins";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sth = $conn->prepare("DELETE FROM Department
WHERE department_id = 1");

$sth->bindParam(':department_id', $department_id);
$sth->bindParam(':name', $name);
$sth->bindParam(':location', $location);

$sth->execute();
echo 'YOU DID IT';

?>