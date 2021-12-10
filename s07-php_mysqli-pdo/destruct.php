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
    class Fruit {
        public $name;
        public $color;
        public $weight;

        function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        function get_name() {
            //return $this->name;
            echo " methode 1 - The fruit is {$this->name} .<br>";
        }
        function get_color() {
            //return $this->color;
            echo " methode 2 - The fruit is {$this->color} .<br>";
        }
        function get_weight() {
            //return $this->weight;
            echo " methode 3 - The fruit is {$this->weight} .<br>";
        }
    }



    $apple = new Fruit("Apple", "red", 160 );

    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $apple->get_weight();

    $orange = new Fruit("Orange", "orange", 50 );
    echo "<br>";
    echo " ---------------- ";
    echo "<br>";
    echo $orange->get_name();
    echo "<br>";
    echo $orange->get_color();
    echo "<br>";
    echo $orange->get_weight();

    // lon instancie la classe Fruit
    $kiwi = new Fruit("Kiwi","vert", 10);
    echo "<br>";
    echo " ---------------- ";
    echo "<br>";
    echo $kiwi->get_name();
    echo "<br>";
    echo $kiwi->get_color();
    echo "<br>";
    echo $kiwi->get_weight();
    // on affiche 
?>

</body>
</html>