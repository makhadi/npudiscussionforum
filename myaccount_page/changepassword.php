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
        <title>Change Password</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
    <body>
        <h1>Change Password</h1>
        <div id = "body">
            <p><?php echo 'Welcome: '.$uid['firstName'].' '.$uid['lastName']?></p>
            <form method="post" action="index.php/?action=change_pass">
<p><span style="color: red;">*</span> Indicates mandatory field.</p>
<label for="opassword"><span style="color: red;">*</span> Old Password: </label> 
<br>
<input name="opassword" type="password" autofocus required id="opassword">
<br><br>
<label for="password"><span style="color: red;">*</span> New Password: </label> 
<br>
<input name="password" type="password" required id="password">
<br><br>
<label for="cpassword"><span style="color: red;">*</span> Confirm New Password: </label> 
<br>
<input name="cpassword" type="password" required id="cpassword">
<br><br>
<input name="submit" type="Submit" id="submit" value="Submit">
                </form>
        </div>
    </body>
</html>
<?php
require '../footer.html';
?>