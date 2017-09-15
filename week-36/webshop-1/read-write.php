<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Read - Write</h3>
<!--
READ FROM THE FILE
CONVERT DATA TO OBJECT
WRITE THE DATA - PUSH TO THE ARRAY
ARRAY TO TEXT
WRITE DATA BACK TO FILE
 -->

<?php
$sData = file_get_contents('data.txt');
// echo $sData;
$aData = json_decode($sData);
array_push($aData, "Ronaldo", "Beckham", "Best");
?>

<pre>
<?php var_dump($aData); print_r($aData); ?>
</pre>

<?php
$sData = json_encode($aData);
?>
<pre>
<?php var_dump($sData); print_r($sData); ?>
</pre>

<?php
$sData = file_put_contents("data.txt", $sData, FILE_USE_INCLUDE_PATH);
?>





</body>
</html>
