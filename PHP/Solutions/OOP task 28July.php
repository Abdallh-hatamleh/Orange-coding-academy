<?php 
class Car {
    private $make;
    private $model; 
    private $VIN;

    public function __construct($make, $model, $VIN) {
        $this->make = $make;
        $this->model = $model;
        $this->VIN = $VIN;
    }
    public function getDetails() {
        echo "<div>Make: $this->make model: $this->model VIN: $this->VIN</div>";
    }
}

class Inventory {
 private $cars;

 public function __construct($arr = array()) {
    $this->cars = $arr;
 }
 function addcar($make, $model)
 {
    $instace = new Car($make,$model, sizeof($this->cars));
    array_push($this->cars, $instace);
 }
 function getCars() {   
    foreach ($this->cars as $key => $value) {
        echo "<h2>car $key<h2>";
        $value->getDetails();
    }
 }
 function dubugger()
 {
    var_dump($this->cars);
 }
}

$myGarage = new Inventory();
$myGarage->addcar("Toyota","Camry");
$myGarage->addcar("Toyota","Supra");
$myGarage->addcar("Ford","Fusion");
$myGarage->addcar("Ford","Mustang");
$myGarage->addcar("Nissan","Sunny");
$myGarage->addcar("Nissan","Skyline");
// $myGarage->getCars();
// echo "<pre>"; $myGarage->dubugger();
?>