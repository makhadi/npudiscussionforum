<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require './header.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
	<title>NPU Discussion Forum</title>
        <link rel="stylesheet" type="text/css" href="./style.css" />
    </head>
    <body>
        <script language="Javascript">
        function showLoginPage()
        {
        document.submitForm.action = "./login_page/index.php";
        document.submitForm.submit();
        return true;
        }
        function showRegisterPage()
        {
        document.submitForm.action = "./registration_page/index.php";
        document.submitForm.submit();
        return true;
        }
        </script>
    <div id = "body">
        <form name = "submitForm" method="post" action="./home_page/index.php">
            <p><a href="#" onclick="showRegisterPage();">Register</a></p>
        <p><a href="#" onclick="showLoginPage();">Login</a></p>
        </form>
    </div>
    </body>
</html>
<?php
require './footer.html';
?>