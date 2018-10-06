<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
                
            require_once 'functions.php';
    
            $userstr = ' (Guest)';
    
            if (isset($_SESSION['user'])){
                $user = $_SESSION['user'];
                $loggedin = TRUE;
                $userstr = " ($user)";
            }
            else {
                $loggedin = FALSE;
            }
        ?>
        <title><?php echo $appname.$userstr; ?></title>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>
    <body>
        <div align="center">
            <canvas id="logo" width="624" height="100">
                <?php echo $appname; ?>
            </canvas>
        </div>
        <div class="appname">
            <?php echo $appname.$userstr; ?>
        </div>
        <?php
            if($loggedin){
                echo "<br><ul class='menu'>".
                        "<li><a href='members.php?view=$user'>Home</a></li>".
                        "<li><a href='members.php'>Members</a></li>".
                        "<li><a href='friends.php'>Friends</a></li>".
                        "<li><a href='messages.php'>Messages</a></li>".
                        "<li><a href='profile.php'>Edit Profile</a></li>".
                        "<li><a href='logout.php'>Logout</a></li>".
                        "<li><a href='profiledb.php'>Profile using DB</a></li></ul><br>";
            }
            else{
                echo "<br><ul class='menu'>".
                        "<li><a href='index.php'>Home</a></li>".
                        "<li><a href='signup.php'>Sign up</a></li>".
                        "<li><a href='login.php'>Log in</a></li></ul><br>".
                        "<span class='info'>&#8658; You must be logged in to ".
                        "view this page.</span><br><br>";
            }
        ?>
        <script src="javascript.js"></script>
        <script src="OSC.js"></script>
    </body>
</html>
