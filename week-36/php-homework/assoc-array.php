<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>
    <?php $assoc = ["firstName" => "Johann", "lastName" => "Ingi"]; ?>
    <?php // echo $assoc["firstName"]; ?>
    <?php echo $assoc["firstName"] . " " . $assoc["lastName"]; ?>

    <!-- ADN && UPDATE -->
    <?php $assoc["firstName"] = "Olafur"; ?>
    <?php echo $assoc["firstName"] . " " . $assoc["lastName"]; ?>
</body>
</html>