<!DOCTYPE html>
<html>
<head>
	<title>WEBSHOP</title>
</head>
<body>

	<?php
	// EXER

	// READ FROM THE FILE
	// CONVERT DATA TO OBJECT
	// WRITE THE DATA - PUSH TO THE ARRAY
	// ARRAY TO TEXT
	// WRITE DATA BACK TO FILE


	// Open the file
	$sData = file_get_contents( 'data.txt' );
	// Get the data and convert it to an object
	$aData = json_decode( $sData );
	// echo $aData[1];
	// Add to array
	array_push( $aData, "A", "B", "C");
	echo count( $aData );

	for( $i = 0; $i < count($aData); $i++ ){
		$sLetterName = $aData[$i];

		$sDivProduct = "<div><a href='product.php?id=$sLetterName'>$sLetterName</a></div>";
		echo $sDivProduct;
	}


	// for( $i = 0; $i < count($aData); $i++ ){
	// 	$sProductId = $aData[$i];
	// 	$sProductName = $aData[$i+1];
	// 	$sDivProduct = "<div><a href='product.php?id=$sProductId'>$sProductName</a></div>";
	// 	echo $sDivProduct;
	// }

	?>




</body>
</html>



