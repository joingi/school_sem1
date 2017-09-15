<?php

	$sData = file_get_contents( 'data.txt' );
	// convert the text to an object (array)
	$aData = json_decode( $sData );
	// Get rid of the price from the array
	for($i = 0; $i < count($aData); $i++){
		$jItem = $aData[$i];
		// unset deletes a key value
		unset( $jItem->price );
	}
	// convert the array to string
	$sData = json_encode( $aData );
	echo $sData;

?>