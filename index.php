<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php require_once 'header.php'; ?>
        <meta charset="UTF-8">
        <title><?php echo $appname; ?></title>
    </head>
    <body>
        <span class='Main'>Welcome to <?php echo $appname; ?>
            <?php
            if ($loggedin){
                echo " $user, you are logged in.";
            }
            else {
                echo 'Please sign up and/or login to join in.';
            }
        ?>
    </span><br>
    </body>
</html>
