<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>arrays</h3>
<?php
$numbers = array(4,8,16,32,64,128);
echo $numbers[0];
// after php 5.4
// $array = array(1,2,3,4) is the same as
// $array = [1,2,3,4];
$numbers = array(4,8,16,32,64,128);
?></br>

</hr>

<?php
$mixed = array(7, "cantona", "Ronaldo", array("c", "r", 7)); ?>
<?php echo $mixed[2]; ?></br>
<?php // echo $mixed[3]; ?></br>

<pre>
<?php // print_r($mixed); ?></br>
</pre>

<?php echo $mixed[3][2]; ?></br>

<!-- ADD && UPDATE array -->
<?php echo $mixed[2] = "Valencia"; ?></br>
<?php echo $mixed[4] = "George Best"; ?></br>

<!-- ADD TO END OF ARRAY -->
<?php echo $mixed[] = "Pele"; ?></br>
<?php echo $mixed[] = "Neymar"; ?></br>

<pre>
<?php print_r($mixed); ?></br>
</pre>

<!-- NEW ARRAY -->
<?php $newMixed = [7, "Beckham", "Martial", ["B", "M", 9]] ?>
<?php echo $newMixed[1] ?>

<pre>
<?php print_r($newMixed); ?></br>
</pre>
</body>
</html>