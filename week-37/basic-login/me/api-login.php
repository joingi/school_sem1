<?php
	session_start();

	// Fake the correct data - this will be in the database
	$sCorrectUserName 		= "A";
	$sCorrectUserPassword = "1";
	$sCorrectLastName 		= "Ingi";

	// Data comes from the browser
	$sUserName 			= $_POST['txtUserName'];
	$sUserPassword 	= $_POST['txtUserPassword'];

	if( $sUserName == $sCorrectUserName &&
			$sUserPassword == $sCorrectUserPassword )
	{
		$_SESSION['sUserLastName'] = $sCorrectLastName;
		// send thi to the client
		$sjResponse = '{"login":"ok","lastName":"'.$sCorrectLastName.'"}';
		echo $sjResponse;
		exit;
	}

	$sjResponse = '{"login":"error"}';
	echo $sjResponse;
	exit;


?>