<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>array functions</h3>
<hr>

<?php $numbers = array(4,8,16,32,64,128); ?>

Count:      <?php echo count($numbers); ?><br>
Max Value:  <?php echo max($numbers); ?><br>
Min Value   <?php echo min($numbers); ?><br>

<hr>
<pre>
Sort:           <?php echo sort($numbers); print_r($numbers); ?><br>
Reverse Sort:   <?php echo rsort($numbers); print_r($numbers); ?><br>
</pre>
<br>
<!-- Change Array to String -->
Implode: <?php $numString = implode(" * ", $numbers); ?> <?php echo $numString; ?><br>
<!-- Change string to array -->
Explode: <?php print_r(explode(" * ", $numString)); ?> <?php echo $numString; ?><br>

<!-- Is first value in array? 1 OR 0 === True or False -->
Contains: <?php echo in_array(4, $numbers); ?><br>
Contains: <?php echo in_array(2, $numbers); ?><br>
</body>
</html>