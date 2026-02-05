<?php

$country = $_POST['country'];

$cities = array(
    "Nepal" => array("Kathmandu", "Pokhara", "Lalitpur", "Biratnagar"),
    "India" => array("Delhi", "Mumbai", "Chennai", "Bangalore"),
    "USA" => array("New York", "Los Angeles", "Chicago", "Houston")
);

if(array_key_exists($country, $cities)){
    foreach($cities[$country] as $city){
        echo "<option value='$city'>$city</option>";
    }
} else {
    echo "<option value=''>No Cities Found</option>";
}

?>
