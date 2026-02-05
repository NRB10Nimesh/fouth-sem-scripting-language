<!--2. Create a class called Bicycle.
A The class should have 5 public properties: $brand, $model, $year, $description 
  and $weight. Default value for the $description property is “Used bicycle” (hint: 
  you can set it either when declaring the property or through the constructor).
  Create getInfo method (a getter) that will return information about the bike in the 
  following format: “$brand $model ($year)”.
B Create getWeight method that will return weight in grams. Make this method 
  configurable so that it accepts one argument which by default is false. If it is true, 
  the weight should be returned in kilograms and if it is false (default), it should 
  return weight in grams. Create a setter method for the weight property. The 
  weight property stores the weight in grams. Create two objects from the Bicycle 
  class and set values for all properties. Print each bike’s information. Print each 
  bike’s weight in kilograms. Print each bike’s weight in grams.
-->

<?php
class Bicycle
{

    // Public properties
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight; // stored in grams

    // Constructor (optional but useful)
    public function __construct($brand, $model, $year, $weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
    }

    // Getter: returns bike info
    public function getInfo()
    {
        return "$this->brand $this->model ($this->year)";
    }

    // Setter for weight (in grams)
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    // Getter for weight
    // If true → kilograms, else → grams
    public function getWeight($inKg = false)
    {
        if ($inKg) {
            return $this->weight / 1000 . " kg";
        } else {
            return $this->weight . " g";
        }
    }

}

// Create first bicycle object
$bike1 = new Bicycle("Giant", "Escape 3", 2021, 12000);
$bike1->description = "Road bicycle";

// Create second bicycle object
$bike2 = new Bicycle("Trek", "FX 2", 2023, 11000);
$bike2->description = "Hybrid bicycle";

// Print bike information
echo $bike1->getInfo() . "<br>";
echo "Weight in Kg: " . $bike1->getWeight(true) . "<br>";
echo "Weight in Grams: " . $bike1->getWeight() . "<br><br>";

echo $bike2->getInfo() . "<br>";
echo "Weight in Kg: " . $bike2->getWeight(true) . "<br>";
echo "Weight in Grams: " . $bike2->getWeight() . "<br>";

?>