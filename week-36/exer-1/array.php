<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
</head>
<body>
    <h2>Week 36</h2>
    <h3>php array excercise</h3>


<?php

// ## SAND ##
// CONNECT TO THE DATABASE AND GET DATA
// WE DONT HAVE A DATABASE, SO WE FAKE IT
// VARIABLES IN PHP START WITH A $
    $aItems = ["A","B"];
    // $aItems = array();
    // echo $aItems[1];

// How about the length of the array
    echo sizeof( $aItems );

// push to letter C to the array
    array_push( $aItems , "C" );
    // echo $aItems[2];
    // echo sizeof( $aItems );
// A B C
// How do you delete an element from the array?
    echo count( $aItems );
    unset( $aItems[1] );
    echo count( $aItems );
    array_splice( $aItems , 1 , 1);
    echo count( $aItems );
    // echo $aItems[1];
// how to show the content of an object in the screen
?>
<pre>
<?php
var_dump( $aItems );
print_r( $aItems );
 ?>
</pre>


</body>
</html>