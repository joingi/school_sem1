<?php
	//echo '{"status":"ok"}';

	// DELETE FROM users WHERE id = 3
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test_shop";

	// Check that the data is valid
	// name cannot be more than 1 character
	// name cannot be less than 1 character
	try {

		// connect to the database
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// create a query
		$sUserId = $_GET['id'];
		$query = $conn->prepare("DELETE FROM users WHERE id = :userId");
		$query->bindParam( ':userId' , $sUserId );
		// // run the query

		$query->execute();

		$iRowsModified = $query->rowCount(); // ??????????

		echo $iRowsModified;

		// $sjResponse = $bResult ? '{"status":"ok"}' : '{"status":"error"}' ;
		// // $lastId = $query->lastInsertId();
		// //$result = json_encode( $query->fetch(PDO::FETCH_ASSOC) );

		// echo $sjResponse;



	} catch (Exception $e) {

		// echo "ERROR";

	}


?>