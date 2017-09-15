<!DOCTYPE html>
<html>
<head>
	<title>PRODUCT</title>
</head>
<body>
	
	<?php
		$sProductId = $_GET['id']; 
		// echo 'THE PRODUCT ID IS: '. $sProductId;
		$sProducts = file_get_contents( 'data.txt' );
		$aProducts = json_decode( $sProducts );
		$iIndexOfMatch = array_search( $sProductId , $aProducts );
		// echo $iIndexOfMatch;
		$sProductName = $aProducts[$iIndexOfMatch+1];
		echo "<div>ID: $sProductId, NAME: $sProductName</div>";


	?>

</body>
</html>