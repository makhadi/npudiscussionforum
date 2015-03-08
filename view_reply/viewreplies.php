<?php
require '../header.html';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>NPU Discussion Forum</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
    <body>
        <div id = "body">
        <p><?php echo 'Welcome: '.$uid['firstName'].' '.$uid['lastName']?></p>
            <table>
                <tr>
                    <th>Post</th>
                    <th>Date Posted</th>
                    <th>Posted By</th>
                </tr>
                <?php foreach ($post as $pt) : ?>
                    <tr>
                        <td><?php echo $pt['description']; ?></td>
                        <td><?php echo $pt['datePosted']; ?></td>
                        <td><?php echo $pt['firstName'].' '.$pt['lastName']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table><br>
            <a><b>Replies to the above post:</b></a><br><br>
                <?php foreach ($reply as $repl) : ?>
                        <?php echo $repl['content']; ?><br>
                        <?php echo 'Date Replied: '.$repl['dateReplied']; ?><br>
                        <?php echo 'Replied By: '.$repl['firstName'].' '.$repl['lastName']; ?><br><br>
                <?php endforeach; ?>
                <form action="." method="post">
                <br>
                <textarea name="content" rows="6" cols="35"></textarea>
                <br>
                <input type="hidden" name="action"
                 value="submit_reply" />
                <input type="hidden" name="postid"
                 value="<?php echo $postid; ?>" />
<?php
error_reporting(0);
require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Lfuf_ISAAAAAJ_nHNeX2VWezzDh1-7Vs-UiEkMW";

# the response from reCAPTCHA
//$resp = null;
# the error code from reCAPTCHA, if any
//$error = null;

# was there a reCAPTCHA response?
echo recaptcha_get_html($publickey);
?>
                <input type="submit" value="Reply" />
                </form>
        </div>
    </body>
</html>
<?php
require '../footer.html';
?>