<?php
require('../Model/init.php');
require_once('recaptchalib.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'view_reply';
}

if($action == 'view_reply'){
    $uid = $users->getUserId();
    if(isset($_POST['post_id'])){
    $postid = $_POST['post_id'];
    $_SESSION['postid'] = $_POST['post_id'];
    }else{
        $postid = $_POST['postid'];
    }
    $reply = $posts->getReplies($postid);
    $post = $posts->getSelectedPost($postid);
    
    include('viewreplies.php');
}
else if($action == 'valid'){
    $postid = $_SESSION['postid'];
    $reply = $posts->getReplies($postid);
    $post = $posts->getSelectedPost($postid);
    $uid = $users->getUserId();
    $userid = $uid['userID'];
    $content = $_POST['content'];
    
    $result = $posts->saveReply($userid, $postid, $content);
    //unset($_POST['captcha']);
    if($result == false){
        echo 'Reply content cannot be empty';
        include('viewreplies.php');
    }else {
        unset($_POST['action']);
        include('../view_reply/index.php');
    }
}
else if($action == 'invalid'){
        echo 'Incorrect code, please input the correct code and try again!';
        unset($_POST['action']);
        include('../view_reply/index.php');
}
else if($action == 'submit_reply'){
    if ($_POST["recaptcha_response_field"]) {
        $privatekey = "6Lfuf_ISAAAAAN9cYcSqOu3N917x9o8ZsJ-4wd_d";
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                $postid = $_POST['postid'];
                $reply = $posts->getReplies($postid);
                $post = $posts->getSelectedPost($postid);
            $uid = $users->getUserId();
            $userid = $uid['userID'];
            $content = $_POST['content'];
            $result = $posts->saveReply($userid, $postid, $content);
            if($result == false){
                    echo 'Reply content cannot be empty';
                    include('viewreplies.php');
            }else {
                unset($_POST['action']);
                include('../view_reply/index.php');
            }
         } else {
            echo 'Incorrect code, please input the correct code and try again!';
            unset($_POST['action']);
            include('../view_reply/index.php');
           }
}
}
?>