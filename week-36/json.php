<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// echo "JSON";

$sajProducts = '[{"name": "A"}, {"name": "B"}';
// echo $sajProducts;

// Convert
$ajProducts = json_decode( $sajProducts );

// push 1
$sjProduct = '{"name": "A"}';


// cl alternitive
// var_dump($ajProducts);
// print_r($ajProducts);

// echo $ajProducts[0]->name;
// echo $ajProducts[1]->name;
// edit A to X

// $ajProducts[0]->name = "X";
// echo $ajProducts;

// array_splice($ajProducts, 0, 1);
// echo $ajProducts;


// array_push($ajProducts[], "");


var_dump($ajProducts);
echo "LENGTH IS: " . count($ajProducts);
?>
<h3>JSON</h3>

</body>
</html>