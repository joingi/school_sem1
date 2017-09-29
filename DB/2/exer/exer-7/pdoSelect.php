<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "slide01Joins";

$name = "julia";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sth = $conn->prepare("SELECT * FROM Employee WHERE name = :name");
$sth->bindParam(':name', $name);

// $STH = $DBH->prepare("INSERT INTO folks (name, addr, city) value (:name, :addr, :city)");
$sth->execute();
$sth->setFetchMode(PDO::FETCH_OBJ);
/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";


?>