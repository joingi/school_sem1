<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbcourse";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sth = $conn->prepare("SELECT * FROM customers");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";
?>