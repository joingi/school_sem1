<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asynchronus Form</title>

    <style>
    #reult {
        display: none;
    }
    </style>
</head>
<body>

    <div id="messurement">
    <p>Enter measurements below to determine the total volume.</p>
        <form id="measurement-form" action="process_measurements.php" method="POST">
            Length: <input type="text" name="length" >
            <br>
            Width: <input type="text" name="width" >
            <br>
            Height: <input type="text" name="height" >
            <br>
            <input id="html-submit" type="submit" value="Submit">
            <input id="ajax-submit" type="button" value="Ajax Submit">
        </form>
    </div>

    <div id="result">
        <p>The total value is: <span id="volume"></span></p>
    </div>

    <script>
        var result = document.getElementById('result');
        var volume = document.getElementById('volume');

    </script>
</body>
</html>