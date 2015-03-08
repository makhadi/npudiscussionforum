<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'my_account';
}
if ($action == 'myaccount_page') {
    require('../Model/init.php');
}else{
    require('../Model/init.php');
}

if ($action == 'my_account' || $action == 'myaccount_page') {
    $uid = $users->getUserId();
    include 'myaccount.php';
}
else if($action == 'change_password'){
    $uid = $users->getUserId();
    include 'changepassword.php';
}
else if($action == 'change_pass'){
    $uid = $users->getUserId();
    $oldPass = $_POST['opassword'];
    $newPass = $_POST['password'];
    $confirmPass = $_POST['cpassword'];
    $result = $users->changePassword($oldPass, $newPass, $confirmPass);
    if($result == true){
        include 'passwordchanged.php';
    }
    else{
        echo 'Old password does not match';
        include 'changepassword.php';
    }
}
?>