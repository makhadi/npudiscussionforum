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
                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action"
                                       value="view_post" />
                                <input type="hidden" name="post_id" 
                                       value="<?php echo $pt['postID']; ?>" />
                                <input type="submit" value="View Comments" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <table>
            <tr>
                <th>
                    
                </th>
            </tr>
        </table>
    </div>
    </body>
</html>
<?php
require '../footer.html';
?>