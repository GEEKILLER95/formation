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
  // Properties
  public $name;
  public $color;

  // Methods
  function set_values($name, $color) {
    $this->name = $name. $color;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_values('Apple ', 'Green ');
$banana->set_values('Banana ', 'Yellow ');

echo $apple->get_name();
var_dump($apple instanceof Fruit);
echo "<br>";
echo $banana->get_name();
var_dump($banana instanceof Fruit);

?>

</body>
</html>