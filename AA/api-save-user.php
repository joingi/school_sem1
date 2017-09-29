<?php
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
        $sName = $_POST['txtName'];
        $query = $conn->prepare("INSERT INTO users (name) VALUES ( :name )");
        $query->bindParam( ':name' , $sName );
        // run the query

        $bResult = $query->execute();
        $sjResponse = $bResult ? '{"status":"ok"}' : '{"status":"error"}' ;
        // $lastId = $query->lastInsertId();
        //$result = json_encode( $query->fetch(PDO::FETCH_ASSOC) );

        echo $sjResponse;


    } catch (Exception $e) {

        echo "ERROR";

    }





// get the data
// $query->setFetchMode(PDO::FETCH_OBJ);

// $aData = $query->fetchAll();
// $sjData = json_encode( $aData );
// echo $sjData;


// INSERT INTO `test_shop`.`users`
// (`name`)
// VALUES
// ('Joi');
?>