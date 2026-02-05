<!--3. Create a class called Student. The class should have:
A 3 public properties: $name, $surname and $country;
B 1 private property: $tuition;
C 1 protected property: $indexNumber.
   o Create getter methods for the name and the surname of the student. Create a 
     public method helloWorld() that will return “Hello World” string. Create a 
     protected method helloFamily() that will return “Hello Family” string. Create a 
     private method helloMe() that will return “Hello me!” string. Create a private 
     getter method getTuition() that will print the value of the tuition property. Do not 
     use a constructor with arguments. Create a subclass PartTimeStudent. Add a 
     public method helloParent() that will call the method helloFamily() from the 
     Student class. Create objects from both the Student and the PartTimeStudent 
     classes, and call all the methods within.
-->

<?php
class Student {

    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private property
    private $tuition;

    // Protected property
    protected $indexNumber;

    // Constructor WITHOUT arguments
    public function __construct() {
        $this->tuition = 5000;
        $this->indexNumber = "IDX123";
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    // Public method
    public function helloWorld() {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily() {
        return "Hello Family";
    }

    // Private method
    private function helloMe() {
        return "Hello me!";
    }

    // Private getter method for tuition
    private function getTuition() {
        echo "Tuition Fee: " . $this->tuition . "<br>";
    }

    // Public method to call private methods internally
    public function showPrivateMethods() {
        echo $this->helloMe() . "<br>";
        $this->getTuition();
    }
}

// Subclass
class PartTimeStudent extends Student {

    // Public method calling protected method from parent
    public function helloParent() {
        return $this->helloFamily();
    }
}

/* Object creation */

// Student object
$student = new Student();
$student->name = "John";
$student->surname = "Doe";
$student->country = "Nepal";

// PartTimeStudent object
$ptStudent = new PartTimeStudent();
$ptStudent->name = "Alice";
$ptStudent->surname = "Smith";
$ptStudent->country = "India";

/* Method calls */

// Student methods
echo $student->getName() . "<br>";
echo $student->getSurname() . "<br>";
echo $student->helloWorld() . "<br>";
$student->showPrivateMethods();

echo "<br>";

// PartTimeStudent methods
echo $ptStudent->getName() . "<br>";
echo $ptStudent->getSurname() . "<br>";
echo $ptStudent->helloWorld() . "<br>";
echo $ptStudent->helloParent() . "<br>";
?>
