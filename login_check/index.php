<?php
require('../Model/init.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

if ($action == 'login') {
    $course_id = 'CS480';
    if (isset($_GET['course_id'])) {
        $course_id = $_GET['course_id'];
    }
    $cours = $posts->getCourse();
        if(isset($_POST['loginid']) && isset($_POST['pwd'])){
        $loginid = $_POST['loginid'];
        $pwd = $_POST['pwd'];
        $availableuser = $users->checkUser($loginid, $pwd);
        }else{
            $availableuser = true;
        }
        if($availableuser == true){
            if(isset($_POST['loginid'])){
            $_SESSION['currentuser'] = $_POST['loginid'];
            }
            $uid = $users->getUserId();
            $post = $posts->getPosts($course_id);
            include('loggedin.php');
        }else{
            echo'Incorrect username/password.';
            include('../login_page/index.php');
        }
}
else if($action == 'add_post'){
    include '../add_post/index.php';
}
else if($action == 'view_reply'){
    include '../view_reply/index.php';
}
else if($action == 'valid'){
        include('../view_reply/index.php');
}
else if($action == 'invalid'){
        include('../view_reply/index.php');
}
else if($action == 'submit_reply'){
        include('../view_reply/index.php');
}
else if($action == 'myaccount_page'){
    include '../myaccount_page/index.php';
}
else if($action == 'change_password'){
    $uid = $users->getUserId();
    include '../myaccount_page/changepassword.php';
}
else if($action == 'manage_post'){
    include('../manage_post/index.php');
}
else if($action == 'change_pass'){
    $uid = $users->getUserId();
    $oldPass = $_POST['opassword'];
    $newPass = $_POST['password'];
    $confirmPass = $_POST['cpassword'];
    $result = $users->changePassword($oldPass, $newPass, $confirmPass);
    if($result == true){
        include '../myaccount_page/passwordchanged.php';
    }
    else{
        echo 'Old password does not match';
        include '../myaccount_page/changepassword.php';
    }
}
?>