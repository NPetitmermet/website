<!DOCTYPE html>

<html>
<head>
    <link rel="icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="content.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
    <?php session_start();?>
</head>
<header><title>Kreyche/Petitmermet Wedding</title></header>
<body>
    <?php include_once("header.php"); ?>
    <div class="main-content">
        <div class="spacer center-text">Login</div>
        <?php if($_GET['error']==1)echo "<div class='error center-text'>Username/Password Combination Incorrect!</div>"?>
        <form method="POST" action="/sign-in.php">
            <div class="center-text" for="username">
                <label for="username">Username:</label>
                <input id="username" name="username" class="submit-box" value="<?php echo $_GET['username']; ?>"/>
            </div>
            <div class="center-text" for="password">
                <label for="password">Password:</label> 
                <input id="password" name="password" class="submit-box" type="password"/>
            </div>
            <div class="center-text">
                <button class="submit-button">Submit</button>
            </div>
        </form>
        <div class="center-text"><a href="signup.php" class="sign-up center-text signup" id="sign-up">Register Account!</a></div>
    </div>
    <?php include_once("footer.php"); ?>
    <script src="foodSubmission.js"></script>
</body>
</html>