<!DOCTYPE html>
<?php ini_set('display_errors', 0); error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<html>
<head>
<title>showProducts</title>
</head>
<body>

<div class="english">
    <img src="" alt="">
</div>
<div class="danish">
    <img src="" alt="">
</div>

    <ul>
    <?php

    $aLanguage = ["en", "dk"];

    for ($i=0; $i < count($aLanguage); $i++) {
        $langId = $aLanguage[$i];
        echo "<div><a href='lang.php?id=$langId'>$langId</a><br></div>";

    }

        $sProducts = file_get_contents('dataShowProducts.txt');

        $aProducts = json_decode($sProducts);
        print_r($aProducts[0]);

        print_r($aProducts[1]);

        for($i = 0; $i < count($aProducts[0]->products); $i++) {

            $sProductName = $aProducts[0]->products[$i]->name;
            $aProductSizes = $aProducts[0]->products[$i]->sizes;
            $sProductPrice = $aProducts[0]->products[$i]->price;

            $sProductSizes = json_encode($aProductSizes);

            if ($aProducts[0]->products[$i]->onsale) {
                echo "<li>Name: $sProductName, Sizes: $sProductSizes, Price: $sProductPrice <-- On sale!</li>";
            } else {
                echo "<li>Name: $sProductName, Sizes: $sProductSizes, Price: $sProductPrice</li>";
            }

        };

    ?>

    </ul>

</body>
</html>