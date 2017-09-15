<?php
    echo "Works";
    $sData = file_get_contents('data.txt');
    $sProductId = $_GET['products'];
    // echo $sData;
    $aData = json_decode($sData);
    // echo $aData;
    $iIndexOfMatch = array_search( $sProductId , $aData );
    echo $iIndexOfMatch;
    // var_dump($aData);
    // echo count($aData);



    // for( $i = 0; $i < count($aData); $i++ ){
	// 	$sProduct = $aData[$i];

	// 	$sDivProduct = "<div>$sProduct</div>";
	// 	echo $sDivProduct;
    // }




?>