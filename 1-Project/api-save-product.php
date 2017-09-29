<?php

// Get file extension and save with unique id
$sSourcePath = $_FILES['fileProductImage']['tmp_name'];
$sTargetPath = "images/".$_FILES['fileProductImage']['name'];

// Move upload image to target path
move_uploaded_file($sSourcePath, $sTargetPath);


// Make object of new product
$ajNewProduct = json_decode('{ }');
$ajNewProduct->id = uniqid();
$ajNewProduct->name = $_POST['txtProductName'];
$ajNewProduct->supplier = $_POST['txtSupplier'];
$ajNewProduct->price = $_POST['txtPrice'];
$ajNewProduct->image = $sSourcePath.$sTargetPath;

// Get old products from products.text
$sOldProducts = file_get_contents('products.txt');
$aOldProducts =  json_decode($sOldProducts);

array_push($aOldProducts, $ajNewProduct);

$sProducts = json_encode($aOldProducts);
file_put_contents('products.txt', $sProducts);

echo $sProducts;

?>