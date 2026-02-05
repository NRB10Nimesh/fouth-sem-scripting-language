<!--4. Create a class called Product.
       The class should have 3 properties: $description, $quantity and $price Create constructor 
       method accepting 3 arguments ($description, $quantity and $price). In the constructor, 
       when setting these arguments, check if the description is a string and if the quantity and 
       price are numbers. If they are not, print an error message.
       Create setter and getter methods for the $description, $quantity and $price properties. 
       Create a method called calculatePrice() that will return the product’s price as: $quantity * 
       $price; Create an object from the Product class. Print all properties in newlines and then 
       print the result from the calculatePrice() method.
-->

<?php
class Product {

    // Properties
    private $description;
    private $quantity;
    private $price;

    // Constructor with validation
    public function __construct($description, $quantity, $price) {

        if (!is_string($description)) {
            echo "Error: Description must be a string.<br>";
            return;
        }

        if (!is_numeric($quantity) || !is_numeric($price)) {
            echo "Error: Quantity and price must be numbers.<br>";
            return;
        }

        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    // Setter and Getter for description
    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        }
    }

    public function getDescription() {
        return $this->description;
    }

    // Setter and Getter for quantity
    public function setQuantity($quantity) {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        }
    }

    public function getQuantity() {
        return $this->quantity;
    }

    // Setter and Getter for price
    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = $price;
        }
    }

    public function getPrice() {
        return $this->price;
    }

    // Calculate total price
    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

/* Object creation */
$product = new Product("Laptop", 2, 75000);

/* Printing properties */
echo "Description: " . $product->getDescription() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Price per item: " . $product->getPrice() . "<br>";

/* Printing calculated price */
echo "Total Price: " . $product->calculatePrice();
?>
