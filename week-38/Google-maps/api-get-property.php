<?php
$propertyFile = 'data.txt';
$sProperty = file_get_contents($propertyFile);
echo $sProperty;

$jProperty = json_decode($sProperty);
?>