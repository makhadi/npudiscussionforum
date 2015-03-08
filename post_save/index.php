<?php
require '../Model/init.php';
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'post_save';
}

if ($action == 'post_save') {
        $course = $_POST['crs'];
        $description = $_POST['description'];
        $emailid = $_SESSION['currentuser'];
        $result = $posts->savePost($emailid, $course, $description);
        
        if($result == true){
            include('postsaved.php');
        }else{
            echo 'Question cannot be empty.';
            include '../add_post/index.php';
        }
}
?>