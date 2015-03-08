<?php
require('../Model/init.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'view_post';
}

if($action == 'view_post'){
    $uid = $users->getUserId();
    $pos = $posts->getSelectedPost($_POST['post_id']);
    $replies = $posts->getSelectedPost($_POST['post_id']);
    include('viewpost.php');
}
?>