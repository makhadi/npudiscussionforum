<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require '../header.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Account</title>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
    </head>
    <body>
    <div id = "body">
        <p><?php echo 'Welcome: '.$uid['firstName'].' '.$uid['lastName']?></p>
        <h1>My Account</h1>
        <p><a href="?action=change_password" >Change Password</a></p>
        <p><a href="?action=manage_post" >Manage Posts/Replies</a></p>
    </div>
    </body>
</html>
<?php
require '../footer.html';
?>