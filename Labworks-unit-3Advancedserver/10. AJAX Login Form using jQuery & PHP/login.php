<?php

// Sample hardcoded credentials
$valid_userid = "admin";
$valid_password = "12345";

$userid = $_POST['userid'];
$password = $_POST['password'];

if($userid === $valid_userid && $password === $valid_password){
    echo "success";
} else {
    echo "fail";
}

?>
