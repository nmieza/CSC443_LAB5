<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $monthDays = array ('Splorch' => 23, 'Sploo' => 28,
    'Splat' => 2, 'Splatt' => 3, 'Spleen' => 44, 'Splune' => 30,
    'Spling' => 61, 'Slendo' => 61, 'Sploctember' => 31, 
    'Splictember' => 31, 'Splanet' => 30, 'TheRest' => 22);

    // the number of days in the shortest month
    echo "The number of the days in the shortest month is  ";
    $smallest = min($monthDays);
    echo ($smallest);
    echo "<br>";

    ?>
</body>
</html>