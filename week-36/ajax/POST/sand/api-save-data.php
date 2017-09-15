<?php

$iNumberOfFiles = count( $_FILES );
$sFolder = 'pictures/';

for( $i = 1; $i <= $iNumberOfFiles; $i++ ){
	$sTheFile = 'file'.$i; // file1, file2, file3
	$sFileName = $_FILES[$sTheFile]['name']; 
	$sSaveFileLocation = $sFolder.$sFileName; // pictures/new-schedule.png
	move_uploaded_file( $_FILES[$sTheFile]['tmp_name'] , $sSaveFileLocation );
}

/*
// Get the file name
$sFileNameOne = $_FILES['file1']['name'];
$sFileNameTwo = $_FILES['file2']['name'];
$sFileNameThree = $_FILES['file3']['name'];

// Save the file to the pictures folder
$sFolder = 'pictures/';
$sSaveFileToOne = $sFolder.$sFileNameOne; // pictures/new-schedule.png
$sSaveFileToTwo = $sFolder.$sFileNameTwo; // pictures/new-schedule.png
$sSaveFileToThree = $sFolder.$sFileNameThree; // pictures/new-schedule.png
// save by using a php function
move_uploaded_file( $_FILES['file1']['tmp_name'] , $sSaveFileToOne );
move_uploaded_file( $_FILES['file2']['tmp_name'] , $sSaveFileToTwo );
move_uploaded_file( $_FILES['file3']['tmp_name'] , $sSaveFileToThree );
*/
echo 'ok'; // Reply to the client via AJAX


?>