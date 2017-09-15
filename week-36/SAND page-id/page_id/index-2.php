<!DOCTYPE html>
<html>
<head>
	<title>WEBSHOP</title>
</head>
<body>

	<?php
	// Open the file 
	$sData = file_get_contents( 'data.txt' );
	// Get the data and convert it to an object
	$aData = json_decode( $sData );
	// Show the letter
	// echo $aData[0];

	for( $i = 0; $i < count($aData); $i+=2 ){
		$sProductId = $aData[$i];
		$sProductName = $aData[$i+1];
		$sDivProduct = "<div><a href='product.php?id=$sProductId'>$sProductName</a></div>";
		echo $sDivProduct;
	}

	?>




</body>
</html>



