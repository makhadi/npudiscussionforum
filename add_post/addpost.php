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
        <title>Add Post</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
<body>
<div id = "body">
<p><?php echo 'Welcome: '.$uid['firstName'].' '.$uid['lastName']?></p>
<form method="post" action="../post_save/index.php">
<p><span style="color: red;">*</span> Indicates mandatory field.</p>
<label for="course"> Course: </label>
<select name = "crs">
<option value="CS464">CS464</option>
<option value="CS480">CS480</option>
<option value="CS526">CS526</option>
</select>
<br><br>
<label for="course"> Question: </label><br>
<textarea name="description" rows="6" cols="35"></textarea>
<br><br>
<input name="submit" type="Submit" id="submit" value="Post">
</form>
</div>
</body>
</html>
<?php
require '../footer.html';
?>