<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Change letter</p>

<?php
    $sLetter = file_get_contents('data.txt');
    $aLetter = json_decode( $sLetter );
    $a = $aLetter[0]->name;
    $b = $aLetter[1]->name;
    // print_r($aLetter[1]->name);

    echo " <div>This is Letter: $a <a href='#'><button>Update</button></a> <br>This is Letter: $b <a href='#'><button>Update</button></a></div>";

    // for ($i=0; $i < counter($aLetter[]->name) ; $i=+1) {
    //     $letterName = $aLetter[$i];
    //     $letter = $aLetter[$i +2];

    //     echo "<div>name: $letterName </div>";
    // }
?>


</body>
</html>