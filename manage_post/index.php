<?php

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'manage_post';
}

if($action == 'manage_post'){
    include('managepost.php');
}
?>