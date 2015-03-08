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
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
<body>
<div id = "body">
<form method="post" action="../registration_save/index.php">
<p><span style="color: red;">*</span> Indicates mandatory field.</p>
<label for="firstName"><span style="color: red;">*</span> First Name: </label>
<br>
<input name="firstName" type="text" autofocus required id="firstName" autocomplete="on">
<br>
<label for="lastName"><span style="color: red;">*</span> Last Name: </label>
<br>
<input name="lastName" type="text" required id="lastName" autocomplete="on">
<br>
<label for="emailID"><span style="color: red;">*</span> Email ID: </label>
<br>
<input name="emailID" type="text" required id="emailID" autocomplete="on">
<br>
<label for="password"><span style="color: red;">*</span> Password: </label> 
<br>
<input name="password" type="password" required id="password" autocomplete="on">
<br>
<label for="cpassword"><span style="color: red;">*</span> Confirm Password: </label> 
<br>
<input name="cpassword" type="password" required id="cpassword" autocomplete="on">
<br>
<label for="phoneNumber"> Phone Number: </label>
<br>
<input name="phoneNumber" type="text" autocomplete="on">
<br>
<label for="address"> Address: </label>
<br>
<textarea name="address" rows="2" cols="20"></textarea>
<br>
<label for="city"> City: </label>
<br>
<input name="city" type="text" autocomplete="on">
<br>
<label for="state"> State: </label>
<br>
<input name="state" type="text" autocomplete="on">
<br>
<label for="country"> Country: </label>
<br>
<input name="country" type="text" autocomplete="on">
<br>
<input name="submit" type="Submit" id="submit" value="Submit">
</form>
</div>
</body>
</html>
<?php
require '../footer.html';
?>