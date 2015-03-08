<?php
require('../Model/init.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'add_post';
}

if ($action == 'add_post') {
    $uid = $users->getUserId();
        include('addpost.php');
}

?>