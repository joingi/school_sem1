<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
<!-- Pass variable -->
	<!-- <a href="a.php?n=A&ln=B">Take me to A</a> -->
	<!-- <a href="b.php">Take me to B</a> -->
</div>

<!-- <div>ID: 0 NAME: X</div> -->

<?php
$aProducts = [1, 'A', 2, 'B'];

for ($i = 0; $i < count($aProducts); $i += 2) {
    $iId   = $aProducts[$i];
    $sName = $aProducts[$i +1];
    echo "<div>ID: $iId NAME: <a href='$sName.php?id=$iId'>$sName</a></div>";
}

// NEW EX
// Open file
	// $sData = file_get_contents('data.txt');
	// // Get data and convert to an object
	// $aData = json_decode( $sData);

	// for ($i=0; $i <count($aData) ; $i+=2) {
	// 	$iId = $aData[$i];
	// 	$sLetter = $aData[$i +1];

	// 	echo "<div>ID: $iId NAME: <a href='$sLetter.php?id=$iId&name=$sLetter'>$sLetter</a></div>";
	// 	// echo "<div>ID: $iId NAME: $sLetter</div>";

// Open the file
	// $sData = file_get_contents( 'data.txt' );
	// Get the data and convert it to an object
	// $aData = json_decode( $sData );
	// Show the letter
	// echo $aData[0];

	// for( $i = 0; $i < count($aData); $i+=3 ){
	// 	$sProductId = $aData[$i];
	// 	$sProductName = $aData[$i+1];
	// 	$sProductImageLink = $aData[$i+2];
	// 	echo $sProductImageLink;
	// 	$sDivProduct = "<div><a href='product.php?id=$sProductId'>$sProductName</a><img src='$sProductImageLink' alt=""></div>";
	// 	echo $sDivProduct;
	// }

// echo "<div>WORKS</div>";





?>

<!-- <h3>Works</h3> -->

</body>
</html>