<!DOCTYPE html>

<html>
<head>
    <link rel="icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="content.css" />
</head>
<header><title>Kreyche/Petitmermet Wedding</title></header>
<body>
    <?php include_once("header.php"); ?>
    <div class="main-content">
        <div class="spacer center-text">Register Account</div>
        <form method="POST" action="sign-up.php">
            <?php
            if($_GET['error'][0]) echo '<div class="center-text error">
                ERROR: Please enter a username
            </div>';
            ?>
            <?php
            if($_GET['takenuser']) echo '<div class="center-text error">
                ERROR: Username already taken
            </div>';
            ?>
            <div class="center-text">
                Username:
                <input class="submit-box" name="username" value="<?php echo $_GET['username'];?>"/>
            </div>
            <?php
            if($_GET['error'][1]) echo "<div class='center-text error'>
                ERROR: Passwords incorrect
            </div>";
            ?>
            <div class="center-text">
                Password: 
                <input class="submit-box" name="password" type="password"/>
            </div>
            <div class="center-text">
                Confirm Password: 
                <input name="password-confirm" class="submit-box" type="password"/>
            </div>
            <div class="center-text">
                <button class="submit-button">Submit</button>
            </div>
        </form>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>