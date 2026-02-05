<!--6. Create 3 classes – User, AdminUser and Customer.
class User
 Should have 3 protected properties: $name , $surname and $username;
 Set their values using a constructor method;
 Add 1 protected property $is_admin. Its default value should be false;
 Create a method that checks if the user is admin;
 Create a method that prints the user’s full name. If the user is admin, 
print (admin) at the end.
class Customer
 Should extend the User class;
 Add 3 private properties: $city, $state, $country;
 The Customer’s class constructor should have the same parameters as the parent 
constructor;
 For the other properties create setter and getter methods;
 Create a method location() that returns ‘$city, $state, $country’.
class AdminUser
 Should extend the User class;
 The constructor should have the same parameters as the parent constructor;
 The constructor should set the value of the $is_admin property to true.
Create objects from each class. Print the full name and is_admin values for each object, 
and additionally the location (city, state and country) for the customer objects only.
-->

<?php
/* Base Class */
class User {

    // Protected properties
    protected $name;
    protected $surname;
    protected $username;

    // Protected admin flag
    protected $is_admin = false;

    // Constructor
    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    // Check if user is admin
    public function isAdmin() {
        return $this->is_admin;
    }

    // Print full name
    public function printFullName() {
        $fullName = $this->name . " " . $this->surname;
        if ($this->is_admin) {
            $fullName .= " (admin)";
        }
        return $fullName;
    }
}

/* Customer Class */
class Customer extends User {

    // Private properties
    private $city;
    private $state;
    private $country;

    // Constructor (same parameters as parent)
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

    // Setters and Getters
    public function setCity($city) {
        $this->city = $city;
    }

    public function getCity() {
        return $this->city;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getCountry() {
        return $this->country;
    }

    // Location method
    public function location() {
        return "$this->city, $this->state, $this->country";
    }
}

/* AdminUser Class */
class AdminUser extends User {

    // Constructor
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

/* Object Creation */

// User object
$user = new User("Nimesh", "Ranabhat", "nimesh123");

// Customer object
$customer = new Customer("Sita", "Koirala", "sita01");
$customer->setCity("Kathmandu");
$customer->setState("Bagmati");
$customer->setCountry("Nepal");

// Admin object
$admin = new AdminUser("Admin", "User", "admin01");

/* Output */

// User
echo "User: " . $user->printFullName() . "<br>";
echo "Is Admin: " . ($user->isAdmin() ? "Yes" : "No") . "<br><br>";

// Customer
echo "Customer: " . $customer->printFullName() . "<br>";
echo "Is Admin: " . ($customer->isAdmin() ? "Yes" : "No") . "<br>";
echo "Location: " . $customer->location() . "<br><br>";

// Admin
echo "Admin: " . $admin->printFullName() . "<br>";
echo "Is Admin: " . ($admin->isAdmin() ? "Yes" : "No") . "<br>";
?>
