<!DOCTYPE html>
<html>
<head>
	<title>PRODUCT</title>
</head>
<body>

	<?php
		$sProductId = $_GET['id'];
		// echo 'THE PRODUCT ID IS: '. $sProductId;
		$sData = json_encode( $aData );
		$aData = file_put_contents( 'data.txt' );

		$iIndexOfMatch = array_search( $sProductId , $aProducts );
		// echo $iIndexOfMatch;
		$sProductName = $aProducts[$iIndexOfMatch+1];
		echo "<div>Letter: $sProductId </div>";


	?>

</body>
</html>