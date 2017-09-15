<?php
// get file txtData
$txtData = file_get_contents('data.txt');
// convert to object
$ajData = json_decode($txtData);

// loop array
for ($i=0; $i < count($ajData) ; $i++) {
    // $ajItem = $ajData[$i];
    // remove price from array
    unset($ajData[$i]->price);
}
// convert back to string and print out
$txtData = json_encode($ajData);
echo $txtData;

?>