<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dsn = 'mysql:host=localhost;dbname=npuforumdb';
$username = 'admin';
$password = 'pass@word';

try {
    $db = new PDO($dsn, $username, $password);
    //echo 'Connected.';
} catch (PDOException $ex) {
    $error_msg = $ex->getMessage();
    include('../errors/db_error.php');
    exit();
}
        
?>