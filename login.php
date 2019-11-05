<!DOCTYPE html>

<html>
<head>
    <link rel="icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="content.css" />
    <?php session_start();?>
</head>
<header><title>Kreyche/Petitmermet Wedding</title></header>
<body>
    <?php include_once("header.php"); ?>
    <div class="main-content">
        <div class="spacer center-text">Login</div>
        <?php if($_GET['error']==1)echo "<div class='error center-text'>Username password incorrect!</div>"?>
        <form method="POST" action="/sign-in.php">
            <div class="center-text">
                Username:
                <input name="username" class="submit-box"/>
            </div>
            <div class="center-text">
                Password: 
                <input name="password" class="submit-box" type="password"/>
            </div>
            <div class="center-text">
                <button class="submit-button">Submit</button>
            </div>
        </form>
        <div class="center-text"><a href="signup.php" class="sign-up center-text signup" id="sign-up">Register Account!</a></div>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>