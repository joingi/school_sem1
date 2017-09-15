<?php

// this is just text
$sajProducts = '[{"name":"A"},{"name":"B"}]';
// convert the text to an object
$ajProducts = json_decode( $sajProducts );

// / SOLUTION 1 /
// {"name":"K"}

// $sjProduct = '{"name":"K"}';
// $jProduct = json_decode( $sjProduct );
// array_push( $ajProducts , $jProduct );
// $sajProducts = json_encode( $ajProducts );
// echo $sajProducts;

// / SOLUTION 2 /

// $aProduct = ["name"=>"X"]; // Assosiative array
// array_push( $ajProducts , $aProduct );
// $sajProducts = json_encode( $ajProducts );
// echo $sajProducts;

// SOLUTION 3
// DOES NOT WORK

// $ajProducts["name"] = "X";
// $sajProducts = json_encode( $ajProducts );
// echo $sajProducts;

//SOLUTION 4
// $ajProducts[]->name = "K";
// $sajProducts = json_encode( $ajProducts );
// echo $sajProducts;

// echo $ajProducts[0]->name;
// Edit A to X
// $ajProducts[0]->name = "X";
// Delete the first element in the array {"name":"A"}
// array_splice( $ajProducts , 0 , 1 );
// echo $ajProducts[0]->name;
// var_dump( $ajProducts );
// echo "LENGTH IS: " . count($ajProducts);
// Create a new key-value
// The key is name and the value is K

$sjProduct = '{"name":"K"}';
$jProduct = json_decode( $sjProduct );
array_push( $ajProducts , $jProduct );
$sajProducts = json_encode( $ajProducts );
echo $sajProducts;



// var_dump( $ajProducts );
// echo "LENGTH IS: " . count($ajProducts);
?>