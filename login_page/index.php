<?php

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'Login';
}

if ($action == 'Login') {
        include('login.php');
    }
?>