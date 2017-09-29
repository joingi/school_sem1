<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_shop";

	try {

        // connect to the database
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // create a query
        $sUserId = $_GET['txtName'];
        $query = $conn->prepare("DELETE FROM users WHERE name = :name");
        $query->bindParam( ':name' , $sUserId );

        // run the query
        $query->execute();

        $iRowsModified = $query->rowCount(); // ??????????

        echo $iRowsModified;
        // $sjResponse = $bResult ? '{"status":"ok"}' : '{"status":"error"}' ;
        // $lastId = $query->lastInsertId();
        //$result = json_encode( $query->fetch(PDO::FETCH_ASSOC) );

        // echo $sjResponse;


    } catch (Exception $e) {

        // echo "ERROR";

    }

