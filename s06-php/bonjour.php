<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php
    
    $a = 45 .' ans '; //concatener avec le . 
    $b = "Jean a ";
    $c = 3.66 ."<br>";
    
    echo '<h1>C\'est mardi 30 novembre</h1>';
    echo $b, $a, $c;
    echo nl2br("blips \n bloups");
    
    ?>

</body>
</html>