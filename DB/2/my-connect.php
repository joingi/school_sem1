<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Slide0101";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$statement = $conn->query("SELECT * FROM department");
$result = $statement->fetchAll();
// $row = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo htmlentities($statement);
// echo $row;



// $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $sth = $conn->prepare("SELECT * FROM customers");
// $sth->execute();

/* Fetch all of the remaining rows in the result set */
// print("Fetch all of the remaining rows in the result set:\n");
// $result = $sth->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";
?>