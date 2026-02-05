<!--5. Create an interface HasInfo that will have one abstract method called getInfo().
   A Create a class called Address that implements the HasInfo interface. The class 
should have 3 public properties: street, number and city. Set them through the 
constructor. The method getInfo() in this class should return: "Address: street 
$street, number $number, city $city". Create a class called Phone that implements 
the HasInfo interface.
   B The class should have 2 public properties: prefix and number. Set them through 
the constructor. The method getInfo() in this class should return: "Number:$prefix / $number". 
Create a class called User that implements the HasInfo 
interface. The class should have 2 public properties: name and surname. The class 
should have 2 private properties: address and phone (instances from the classes 
above). The getInfo() method in this class should call the getInfo() methods from 
the Address and Phone class respectively. 
   C The output of this method should be:
"User: $firstName $lastName Address: street $street, number $number, 
city $city Number: $prefix / $number"
   D Create 1 objects from each class. Call the getInformation method from the User 
object to see the above output.
-->

<?php
/* Interface */
interface HasInfo {
    public function getInfo();
}

/* Address Class */
class Address implements HasInfo {

    public $street;
    public $number;
    public $city;

    public function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    public function getInfo() {
        return "Address: street $this->street, number $this->number, city $this->city";
    }
}

/* Phone Class */
class Phone implements HasInfo {

    public $prefix;
    public $number;

    public function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    public function getInfo() {
        return "Number: $this->prefix / $this->number";
    }
}

/* User Class */
class User implements HasInfo {

    public $name;
    public $surname;

    private $address;
    private $phone;

    public function __construct($name, $surname, Address $address, Phone $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getInfo() {
        return "User: $this->name $this->surname " .
               $this->address->getInfo() . " " .
               $this->phone->getInfo();
    }
}

/* Object creation */
$address = new Address("Main Street", 12, "Kathmandu");
$phone = new Phone("+977", "9812345678");
$user = new User("Nimesh", "Ranabhat", $address, $phone);

/* Output */
echo $user->getInfo();
?>
