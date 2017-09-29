<?php
$propertyFile = 'data.txt';
$sProperty = file_get_contents($propertyFile);

$sPrice = $_POST['inpPrice'];
$sAddress = $_POST['inpAddress'];
$sLng = $_POST['lng'];
$sLat = $_POST['lat'];

// Make obejcts of POST Info
$jProperty = json_decode('{}');

$jProperty->price = $sPrice;
$jProperty->address = $sAddress;
$jProperty->lat = $sLat;
$jProperty->lng = $sLng;

// enocode to string and save in file

$sProperty = json_encode($jProperty);
// Write to file
file_put_contents($propertyFile, $sProperty);
echo $sProperty;




?>