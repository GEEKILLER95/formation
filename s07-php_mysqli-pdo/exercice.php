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

    // troisième argument $tva = 1 annule la tva 

    class kevin {
        public $jour;
        public $tarif;
        public $tva;
        public $total;

        function __construct($jour, $tarif, $tva){
            $this->jour = $jour;
            $this->tarif = $tarif;
            $this->tva = $tva;
            $this->total = $total = ($this->jour * $this->tarif)* $this->tva;
        }

        function get_fact(){
            echo "{$this->total}€";
        }
    }

    $factureTTC = new kevin(15, 400, 1.2);
    echo $factureTTC->get_fact(). " TTC<br>";

    $factureHT = new kevin(15, 400, 1);
    echo $factureHT->get_fact(). " HT<br>";

    $factureTVA = new kevin(15, 400, 0.2);
    echo $factureTVA->get_fact(). " TVA<br>";

    ?>
    
</body>
</html>