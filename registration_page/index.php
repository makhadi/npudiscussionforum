<?php

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'Registration';
}

if ($action == 'Registration') {
        include('register.php');
}

?>