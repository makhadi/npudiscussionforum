<?php

require('../Model/init.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'Registration';
}

if ($action == 'Registration') {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $emailID = $_POST['emailID'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $result = $users->registerUser($firstName, $lastName, $emailID, $password, $cpassword, $phoneNumber, $address, $city, $state, $country);
        if($result == true){
        include('registrationsaved.php');
        }
        else{
            echo 'Passwords do not match.';
            include('../registration_page/index.php');
        }
}