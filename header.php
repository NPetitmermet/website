    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="content.css" />
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <?php session_start();?>
    <span id="titlebar">
        <div id="title-header" class="flex">
            <span class="head-text">
                Kreyche/Petitmermet Wedding
            </span>
            <?php if($_SESSION['logged-in'] !== "True") echo'<form class="sign-in" method="GET" action="/login.php"><button value="sign-in" name="pagename">Sign In</button></form>';
            else echo'<form class="sign-in" method="GET" action="/sign-in.php"><button value="sign-out" name="pagename">Sign Out</button></form>';?>
        </div>
        <div class="navbar">
                <?php
                    if(isset($_GET['pagename']) && !empty($_GET['pagename'])) $_SESSION['pagename'] = $_GET['pagename'];
                    if($_SESSION["pagename"] == "info" || empty($_SESSION['pagename'])) echo '<form method="GET" action="/index.php" class="navbar-link full-box-border"><button value="info" href="index.php" class="button selected-page" name="pagename"><span class="selected-page navbar-item">INFO</span></button></form>';
                    else echo '<form method="GET" action="/index.php" class="navbar-link full-box-border"><button value="info" href="index.php" class="button" name="pagename"><span class="navbar-item">INFO</span></button></form>';
                    if($_SESSION["pagename"] == "food") echo '<form method="GET" action="/food.php" class="navbar-link full-box-border"><button value="food" href="food.php" class="selected-page button" name="pagename"><span class="selected-page navbar-item">FOOD</span></button></form>';
                    else echo '<form method="GET" action="/food.php" class="navbar-link full-box-border"><button value="food" href="food.php" class="button" name="pagename"><span class="navbar-item">FOOD</span></button></form>';
                    if($_SESSION["pagename"] == "housing") echo '<form method="GET" action="/housing.php" class="navbar-link full-box-border"><button value="housing" href="housing.php" class="selected-page button" name="pagename"><span class="selected-page navbar-item">HOUSING</span></button></form>';
                    else echo '<form method="GET" action="/housing.php" class="navbar-link full-box-border"><button value="housing" href="housing.php" class="button" name="pagename"><span class="navbar-item">HOUSING</span></button></form>';
                    if($_SESSION["pagename"] == "contact") echo '<form method="GET" action="/contact.php" class="navbar-link full-box-border"><button value="contact" href="contact.php" class="selected-page button" name="pagename"><span class="selected-page navbar-item">CONTACT US</span></button></form>';
                    else echo '<form method="GET" action="/contact.php" class="navbar-link full-box-border"><button value="contact" href="contact.php" class="button" name="pagename"><span class="navbar-item">CONTACT US</span></button></form>';
                ?>
        </div>
    </span>