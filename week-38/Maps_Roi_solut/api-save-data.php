<?php
    $fileName = 'positions.txt';
    $sPositions = file_get_contents($fileName);
    $aPositions = json_decode($sPositions);

    $jNewPosition = json_decode('{}');

    $sPrice = $_POST['price'];
    $sAddress = $_POST['address'];
    $sLat = $_POST['lat'];
    $sLng = $_POST['lng'];

    $jNewPosition->price = $sPrice;
    $jNewPosition->address = $sAddress;
    $jNewPosition->lat = $sLat;
    $jNewPosition->lng = $sLng;

    array_push($aPositions, $jNewPosition);
    $sPositions = json_encode($aPositions);
    file_put_contents($fileName, $sPositions);
?>


