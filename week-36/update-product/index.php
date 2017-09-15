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
// - How do you know if this page should update the data?
// - How do you know if this page shold NOT update the data?
// - Think about the address bar: If you get a "old" and "new
// variable, then the user is trying to update
// - If no "old" and "new" variables are passed, then the user
// is just trying to see the letters

$sajProducts = file_get_contents('data.txt');
$ajProducts = json_decode($sajProducts);

if ($_GET['old'] && $_GET['new']) { // update-product/?old=BBB&new=AAA
    // echo "PLEAS UPDATE";

    for ($i=0; $i < count($ajProducts) ; $i++) {
        // echo $i;
        $jItem = $ajProducts[$i];
        // print_r($jItem);

        if ($jItem->productName == $_GET['old']) {
            echo "Products do Match";

            $jItem->productName = $_GET['new'];
        }
    }
    $sajProducts = json_encode($ajProducts);
    file_put_contents('data.txt', $sajProducts);
}

// for ajLetter
// change ajLetter[value].xxx to stringVar
// echo html elements - old - new.value. - submit
for ($i=0; $i < count($ajProducts); $i++) {
    $sProduct = $ajProducts[$i]->productName;
    // make html form
    echo
        '<div>
            <span id="productName">'.$sProduct.'</span>
            <input id="editProductName" type="text" value="">
            <button id="btnUpdateProduct">UPDATE</button>
        </div>';
}

?>

<script>
    // console.log("X");
    // pass to the page itself the old and the new value
    // the old value is to find a match
    // the new value is to replace the match with it
    btnUpdateProduct.addEventListener('click', function () {
        // console.log('X');
        var oldValue = productName.innerHTML;
        // console.log(oldValue);
        var newValue = editProductName.value;
        // console.log(newValue);
        location.href = 'index.php/?old='+oldValue+'&new='+newValue;
    })
</script>

</body>
</html>