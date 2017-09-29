<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "slide0106";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_errror);
}

// 1
// $sql = "SELECT Assignment.hours, Employee.name
// FROM Employee
// RIGHT JOIN Assignment ON Employee.employee_id = Assignment.employee_id;";
// Julia Worked most 12 hours

// 2
// $sql = "SELECT Assignment.hours, Employee.name
// FROM Employee
// LEFT JOIN Assignment ON Employee.employee_id = Assignment.employee_id;";
// John hasn't started

// 3
$sql = "SELECT hours
FROM Assignment
WHERE EXISTS (SELECT name FROM Employee WHERE  employee_id = Assignment.employee_id);";

// $sql = "SELECT name
// FROM Employee
// WHERE EXISTS (SELECT hours FROM Assignment WHERE  employee_id = Employee.employee_id );";


$result = $conn->query($sql);
$row = $result->fetch_all();

echo "<pre>";
print_r($row);
echo "</pre>";

$conn->close();

?>