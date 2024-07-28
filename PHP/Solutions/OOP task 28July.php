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
    function getVIN()
    { return $this->VIN;}
}

class Inventory {
 private $cars;

 public function __construct($arr = array()) {
    $this->cars = $arr;
 }
 function addcar($make, $model, $VIN) {
 {
    $instace = new Car($make,$model, $VIN);
    array_push($this->cars, $instace);
 }
}
 function getCars() {   
    foreach ($this->cars as $key => $value) {
        echo "<h2>car $key<h2>";
        $value->getDetails();
    }
 }
 function removeCar($vin)
 {
    foreach ($this->cars as $key => $value) {
        if ($vin == $value->getVIN())
        {
            // echo "<script>alert('1')</script>";
            unset($this->cars[$key]);
        } 
    }
}
 function dubugger()
 {
    var_dump($this->cars);
 }
}

$myGarage = new Inventory();
$myGarage->addcar("Toyota","Camry","12345");
$myGarage->addcar("Toyota","Supra","123412");
$myGarage->addcar("Ford","Fusion","11111");
$myGarage->addcar("Ford","Mustang","22222");
$myGarage->addcar("Nissan","Sunny","12121");
$myGarage->addcar("Nissan","Skyline","99999");
$myGarage->removeCar("992999");
$myGarage->getCars();
// echo "<pre>"; $myGarage->dubugger();
?>