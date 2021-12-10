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
// Instanciation d'un objet DateTime initialisé avec une date
$objet = new DateTime('2020-12-31');

// Appel de la méthode format() pour un affichage au format "jour mois année"
echo $objet->format('d/m/Y')."<br>"; // Retournera 31/12/2020

// Appel de la méthode statique createFromFormat()
$objet2 = DateTime::createFromFormat('d/m/Y', '31/12/2020');

if ($objet2 instanceof DateTime) {
    echo '$objet2 est bien un objet DateTime'."<br>";
}
if ($objet2 instanceof DateTimeInterface) {
    echo '$objet2 qui est un objet '.get_class($objet2).
         ' est une implémentation de DateTimeInterface (depuis PHP 5.5.0)'."<br>";
}
// Appel de la méthode format() pour un affichage au format
// défini par la constante de classe DateTime::ISO8601
echo $objet2->format(DateTime::ISO8601)."<br>";
?>
    
</body>
</html>