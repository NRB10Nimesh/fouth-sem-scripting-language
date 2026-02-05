<!--7. Implement interface in PHP with specific properties (e.g., radius for Circle class and side
for Square class) to ensure that multiple classes provide their own implementations of a 
method (e.g., calculateArea), while leveraging these properties for calculations.
-->

<?php

// Interface
interface Shape {
    public function calculateArea();
}

// Circle class
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Square class
class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

// Object creation
$circle = new Circle(7);
$square = new Square(5);

// Output
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Square: " . $square->calculateArea();

?>
