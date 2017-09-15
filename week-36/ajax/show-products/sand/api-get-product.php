<?php
	// The id that the client passes
	$sProductId = $_GET['id'];

	$sData = file_get_contents( 'data.txt' );
	// convert the text to an object (array)
	$aData = json_decode( $sData );

	// Get rid of the price from the array
	for($i = 0; $i < count($aData); $i++){
		// $jItem = $aData[$i];
		if( $aData[$i]->id == $sProductId){
			$sData = '{"price":'.$aData[$i]->price.'}';
			echo $sData;
			exit;
		}

	}




?>