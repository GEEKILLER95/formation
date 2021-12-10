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

        $fruits = array("d" => "citron", "a" => "orange", "b" => "banane", "c" => "pomme");
        $fruitArrayObject = new ArrayObject($fruits);
        $fruitArrayObject->asort();

        foreach ($fruitArrayObject as $key => $val) {
            //echo "$key = $val\n";
            echo nl2br("Une  clé une valeur >>> $key = $val \n");
        }

    ?>
    
</body>
</html>