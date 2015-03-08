<?php 
#starting the users session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'db_connect.php';
require_once 'users_repository.php';
require_once 'posts_repository.php';

$users = new Users($db);
$posts = new Posts($db);
?>