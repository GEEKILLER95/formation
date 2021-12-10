<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            fonction et portée des variables
        </title>
    </head>
    <body>
        <?php
    // affectation multiple sur 
// $a = $b = 2 ;

function addition(){
    //portee des variables - global permet de referencer nos variables a et b 

    global $a, $b;
    $b = $a + $b;
    // echo $a;
    // echo $b;
    echo nl2br(" \n $a \n $b \n ");
    } 

addition();
//var_dump( $b ) ;


function Test(){
    static $a=0; 
    var_dump( $a );
    echo nl2br(" \n $a \n ");
    $a++; 
    echo ("fin de l'instruction la variable A a pour valeur : " .$a );
} // Appel de la fonction (2 fois)

Test(); 
Test();
Test(); 
Test();

//
$var1 = "bonjour";
$$var1 = "le monde"; 
echo nl2br(" \n $bonjour \n ");

// variable globales, locales et static

$y = "variable globale"; 
function myTest() {
  global $y;
  $x = "variable locale";  // local scope
  echo "<p>Variable x inside function is: $x, $y</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $y</p>";

    ?>
    </body>
</html>