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
    
        class MyClass
        {
            public $public = 42;
            protected $protected = 'Protected';
            private $private = 'Private';

            /*function printHello()
            {
                echo $this->public. "<br>";
                echo $this->protected. "<br>";
                echo $this->private. "<br>";
            }*/

            public function setProtected($sProtected){
                return $this->protected = $sProtected;
            }
            public function getProtected(){
                echo $this->protected;
            }

        } // -- fin de la classe MyClass

        $obj = new MyClass();

        $obj->getProtected();
        //echo $obj->public; // Fonctionne
        //echo $obj->protected; // Erreur fatale
        //echo $obj->private; // Erreur fatale

        //$obj->printHello(); // Affiche Public, Protected et Private

        /**
         * Définition de MyClass2
         */

        class MyClass2 extends MyClass
        {
            // On peut redéclarer les propriétés publics ou protégés, mais pas ceux privés
            public $public = 'Public2';
            protected $protected = 'Protected2';
            private $private = 'Private2';

            function printHello()
            {
                echo $this->public. "<br>";
                echo $this->protected. "<br>";
                echo $this->private. "<br>";
            }
        } // -- fin de la classe MyClass2()

        $obj2 = new MyClass2();
        //echo $obj2->public; // Fonctionne
        //echo $obj2->protected; // Erreur fatale
        //echo $obj2->private; // Indéfini

        //$obj2->printHello(); // Affiche Public2, Protected2 et Undefined (Indéfini)

    ?>
    
</body>
</html>