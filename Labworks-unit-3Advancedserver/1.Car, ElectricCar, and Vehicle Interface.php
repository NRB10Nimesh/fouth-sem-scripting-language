<!--1. Create a Car class with the following properties and methods:
A Properties: $make, $model, $year.
B Methods:
  o start(): Print "Car started."
  o displayInfo(): Print the car's make, model, and year.
C Implement Encapsulation : Modify the Car class:
  o Make properties private.
  o Add getter and setter methods for $make, $model, and $year
D Create a ElectricCar class that extends the Car class, 
  o Add a new property $batteryCapacity and method charge()
  o Add a getDescription() method in the Car class and override it in the 
    ElectricCar class.
E Create an interface Vehicle with methods startEngine() and stopEngine(). Implement 
  this interface in the Car class.-->
<?php
/* Interface */
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

/* Car Class */
class Car implements Vehicle {
    // Encapsulation: private properties
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter and Setter methods
    public function setMake($make) {
        $this->make = $make;
    }

    public function getMake() {
        return $this->make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }

    // Methods
    public function start() {
        echo "Car started.<br>";
    }

    public function displayInfo() {
        echo "Make: $this->make, Model: $this->model, Year: $this->year<br>";
    }

    public function getDescription() {
        return "This is a car.";
    }

    // Interface methods
    public function startEngine() {
        echo "Engine started.<br>";
    }

    public function stopEngine() {
        echo "Engine stopped.<br>";
    }
}

/* ElectricCar Class */
class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Electric car is charging.<br>";
    }

    // Method overriding
    public function getDescription() {
        return "This is an electric car with battery capacity of $this->batteryCapacity kWh.";
    }
}

/* Object Creation */
$car = new Car("Toyota", "Corolla", 2020);
$car->start();
$car->displayInfo();
$car->startEngine();
$car->stopEngine();
echo $car->getDescription();
echo "<br><br>";

$electricCar = new ElectricCar("Tesla", "Model 3", 2023, 75);
$electricCar->start();
$electricCar->displayInfo();
$electricCar->charge();
echo $electricCar->getDescription();
?>
