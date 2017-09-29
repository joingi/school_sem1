<?php
$servername = "localhost";
$username = "root";
$password = "root";

//Name of schema
$dbname = "slide01Joins";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sth = $conn->prepare("SELECT *
FROM Employee
RIGHT JOIN Department ON Employee.employee_id = Department.department_id");

$sth->execute();
$sth->setFetchMode(PDO::FETCH_OBJ);
/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";

?>