<?php
require '../header.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Password Changed</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
    <body>
        <div id = "body">
            <p><?php echo 'Welcome: '.$uid['firstName'].' '.$uid['lastName']?></p>
        <?php echo 'Password changed successfully!'; ?>
            <p style="clear:both;"><a href="../index.php">Back to home page</a></p>
        </div>
    </body>
</html>
<?php
require '../footer.html';
?>