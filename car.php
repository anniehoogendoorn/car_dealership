<?php
  class Car
  {
    public $make_model;
    public $price;
    public $miles;

    function __construct ($brand, $car_price = 26000, $odometer = 10000)
    {
    $this->make_model = $brand;
    $this->price = $car_price;
    $this->miles = $odometer;
    }
  }


$porsche = new Car("2014 Porsche 911",20000);
$ford = new Car("2011 Ford F450", 55995, 14241);
$lexus = new Car("2013 Lexus RX 350", 44700, 20000);
$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);




$cars = array($porsche, $ford, $lexus, $mercedes);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Your Car Dealership's Homepage</title>
</head>
<body>
  <h1>Your Car Dealership</h1>
  <ul>
    <?php
      foreach ($cars as $car) {
        echo "<li> $car->make_model </li>";
        echo "<ul>";
          echo "<li> $$car->price </li>" ;
          echo "<li> Miles: $car->miles </li>";
        echo "</ul>";
      }
    ?>
  </ul>
</body>
</html>
