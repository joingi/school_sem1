<?php
	session_start();

	// Fake the correct data - this will be in the database
	$sCorrectUserName 		= "a";
	$sCorrectUserPassword = "1";
	$sCorrectLastName 		= "Þorsteinsson";

	// Data comes from the browser
	$sUserName = $_POST['txtUserName'];
	$sUserPassword = $_POST['txtUserPassword'];

	if( $sUserName == $sCorrectUserName && $sUserPassword == $sCorrectUserPassword ) {
		// Set sUserLastName to sCorrectLastName
		$_SESSION['sUserLastName'] = $sCorrectLastName;
		// send this to the client/js - User login: and lastName in js
		$sjResponse = '{"login":"sUserMatch","lastName": "'.$sCorrectLastName.'"}';
		echo $sjResponse;
		exit;
	}
	// Bellow = else
	$sjResponse = '{"login":"error"}';
	echo $sjResponse;
	exit;


?>