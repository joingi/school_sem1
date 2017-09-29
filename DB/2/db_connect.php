<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'Slide0101';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$query = "SELECT * FROM department";
$result = $mysqli_query($connection, $query);
return $results;

// 3. Use returned data (if any)

// 4. Release returned data
// $mysqli_free_result($result_set);

// 5. Close database connection
mysqli_close($connection);

?>
