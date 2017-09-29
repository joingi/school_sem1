<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_shop";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// connect to the database
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// create a query
$query = $conn->prepare("SELECT * FROM users"); // 1 A ????? [] {}
// run the query
$query->execute();
// get the data
$query->setFetchMode(PDO::FETCH_OBJ);

$aData = $query->fetchAll();
$sjData = json_encode( $aData );
echo $sjData;

?>