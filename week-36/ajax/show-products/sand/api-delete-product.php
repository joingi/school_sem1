<?php

// Delete Ptoduct from id
$sProductId = $_GET['id'];

$sData = file_get_contents( 'data.txt' );
// convert the text to an object (array)
$aData = json_decode( $sData );
// Get rid of the price from the array
for($i = 0; $i < count($aData); $i++){
    $jData = $aData[$i];
    if( $jData[$i]->id == $sProductId){
        $sjData = json_encode($jData[$i]);
        unset($sjData);
        echo $sjData;
        exit;

    }
}

// $sData = json_encode( $aData);
// print_r($sData);