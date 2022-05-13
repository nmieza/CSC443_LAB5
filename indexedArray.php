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
    $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'August', 'September', 'October', 'November', 'December');

    for($i=1; $i< count($month); $i++){
        sort($month);
        echo $month[$i]. "\n";

    }
    
    foreach($month as $value){
        echo $value. "\n";
    }
    ?>

</body>
</html>