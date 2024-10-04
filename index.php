<?php

date_default_timezone_set("America/New_York");

// Greeting message
$greeting = "Hello, and welcome!";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <h1><?php echo $greeting; ?></h1>
    

</body>
</html>
