<?php


$iNumberOfFiles = count( $_FILES );
$sFolder = 'pictures/';

for( $i = 1; $i <= $iNumberOfFiles; $i++ ){
	$sTheFile = 'file'.$i; // file1, file2, file3
	$sFileName = $_FILES[$sTheFile]['name'];
	$sSaveFileLocation = $sFolder.$sFileName; // pictures/new-schedule.png
	move_uploaded_file( $_FILES[$sTheFile]['tmp_name'] , $sSaveFileLocation );
}

echo 'ok'; // Reply to the client via AJAX

// $sUserName = $_POST['inputUserName'];
// $sUserLastName = $_POST['inputUserLastName'];
// $sUserYear = $_POST['inputUserYear'];

// echo $sUserName. ' ' .$sUserLastName.' '<div class=""></div>$sUserYear;
/*
// GET file name
$sFileNameOne = $_FILES['file1']['name'];
$sFileNameTwo = $_FILES['file1']['name'];
$sFileNameThree = $_FILES['file1']['name'];
// echo $sFileName;


    // Save
    $sFolder = 'pictures/';
    $sSaveFileToOne = $sFolder.$sFileNameOne;
    $sSaveFileToTwo = $sFolder.$sFileNameTwo;
    $sSaveFileToThree = $sFolder.$sFileNameThree;

     // move to folder with php function
    move_uploaded_file( $_FILES['fileName']['tmp_name'], $sSaveFileTo);
    echo $sSaveFileTo;
    */









?>