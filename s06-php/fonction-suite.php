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

    require("library/lib.php");

    function wow($a, $b, $c, $d){
        
        echo "bonjour ". $a . $b . $c . "<br>" . $d . "<br>";
        
    }
    wow("le ", "plus ", "beau ", '<img src="https://img-19.ccm2.net/iBYO1DOif2mcoMT7crnZ0Yy3XaU=/480x270/smart/b829396acc244fd484c5ddcdcb2b08f3/ccmcms-commentcamarche/20494859.jpg" alt="">');
    wow("<ul>" , "<li>toto et gros monet</li>" , "<li>blip bloup</li>", "</ul>");

    function add($int1, $int2){

        return $int1 + $int2;

    }
    //var_dump(add(5,6). "<br>" . "<br>");

    function course($p1, $p2, $ttc, $tva, $ht){

        $ttc = $p1 + $p2;
        return "Pain " . $p1 . "<br>Frites " . $p2 . "<br>TTC " . $ttc . "<br>TVA " . (($p1 + $p2) * $tva) . "<br>HT " . $ttc * $ht . "<br>";
    }
    echo course(45, 64 , "", 0.2, 0.8);
  
    $retour = calculPrix(110, 10);
    
    foreach($retour as $retour){
    echo $retour. "<br>";
    }

    //echo "<pre>"; print_r($retour); echo "</pre>";

    ?>
    
</body>
</html>