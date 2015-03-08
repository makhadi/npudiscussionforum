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
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
    <body>
        <div id = "body">
        <form method="post" action="../login_check/index.php">

<p><span style="color: red;">*</span> Indicates mandatory field.</p>
<label for="username"><span style="color: red;">*</span> Username: </label>
<br>
<input name="loginid" type="text" autofocus required id="username" autocomplete="on">
<br><br>
<label for="password"><span style="color: red;">*</span> Password: </label> 
<br>
<input name="pwd" type="password" required id="password" autocomplete="on">
<br><br>
<input name="submit" type="Submit" id="submit" value="Login">
</form>
</div>
</body>
</html>
<?php
require '../footer.html';
?>