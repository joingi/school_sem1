<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRODUCT</title>
</head>
<body>
<h3>products</h3>

	<!-- <div>ID: 1, NAME: A</div> -->

	 <?php
		$sProductId = $_GET['id'];
		// echo 'THE PRODUCT ID IS: '. $sProductId;
		$sProducts = file_get_contents( 'data.txt' );
		$aProducts = json_decode( $sProducts );
		$iIndexOfMatch = array_search( $sProductId , $aProducts );
		echo $iIndexOfMatch;
		$sProductName = $aProducts[$iIndexOfMatch+1];
		$sProductName = $aProducts[$iIndexOfMatch+2];

		echo "<div>ID: $sProductId, NAME: $sProductName</div><img src='$sProductImageLink'>";


	?>


</html>