<?php
	
	$sPrice = $_POST['price'];
	$sAddress = $_POST['address'];
	$sLng = $_POST['lng'];
	$sLat = $_POST['lat'];

	$sProperty = '{}';
	$jProperty = json_decode( $sProperty );
	$jProperty->price = $sPrice;
	$jProperty->address = $sAddress;
	$jProperty->lng = $sLng;
	$jProperty->lat = $sLat;

	$sProperty = json_encode( $jProperty );
	file_put_contents( 'data.txt' , $sProperty );
	echo $sProperty;

?>