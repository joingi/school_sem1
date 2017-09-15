<?php
$sData = file_get_contents( 'data.txt' );

$aData = json_decode( $sData );

$aData[] = $_GET['letter'];

$sData = json_encode( $aData );




?>