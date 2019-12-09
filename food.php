<!DOCTYPE html>

<html>
<head>
    <link rel="icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico?v1" type="image/x-icon" />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="content.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
    <?php session_start();?>
    <?php require_once("dao.php");
        $db = new dao();
        $foodval;
        if($_SESSION['user']!=NULL){
            $_SESSION['food'] = $db->getFoodChoice($_SESSION['user']);
        } else{
            $_SESSION['food'] = NULL;
        }
    ?>
</head>
<header><title>Kreyche/Petitmermet Wedding</title></header>
<body>
    <?php include_once("header.php"); ?>
    <div class="main-content">
        <div class="small-spacer"></div>
        <div class="center-text">Food Options</div>
        <form method="GET" action="/foodhandler.php">
            <div class="center-text food-option">
                <?php 
                    if($_SESSION['food'] == "FishDinner") echo '<input type="radio" id="fish" name="food" value="FishDinner" checked>';
                    else echo '<input type="radio" id="fish" name="food" value="FishDinner">';
                ?>
                <label for="fish">Fish Dinner</label>
            </div>
            <div class="center-text food-option">
                <?php 
                    if(isset($_SESSION['food']) && $_SESSION['food'] == "PorkDinner") echo '<input type="radio" id="pork" name="food" value="PorkDinner" checked>';
                    else echo '<input type="radio" id="pork" name="food" value="PorkDinner">';
                ?>
                <label for="pork">Pork Dinner</label>
            </div>
            <div class="center-text food-option">
                <?php 
                    if(isset($_SESSION['food']) && $_SESSION['food'] == "BeefDinner") echo '<input type="radio" id="beef" name="food" value="BeefDinner" checked>';
                    else echo '<input type="radio" id="beef" name="food" value="BeefDinner">';
                ?>
                <label for="beef">Beef Dinner</label>
            </div>
            <div class="center-text food-option">
                <?php 
                    if(isset($_SESSION['food']) && $_SESSION['food'] == "VegetarianDinner") echo '<input type="radio" id="vegetarian" name="food" value="VegetarianDinner" checked>';
                    else echo '<input type="radio" id="vegetarian" name="food" value="VegetarianDinner">';
                ?>
                <label for="vegetarian">Vegetarian Dinner</label>
            </div>
            <div class="center-text">
                <?php
                    if($_SESSION['logged-in'] === "True") echo '<button class="submit-button">Submit</button>';
                    else echo '<div id="no-submit" class="center-text">Must be logged in to choose your dinner option!</div>';
                ?>
            </div>
            <?php 
                if(isset($_GET['error'])) echo '<div class="center-text error">ERROR: Please select a food item!</div>';
            ?>
        </form>
    </div>
    <?php include_once("footer.php"); ?>
    <script src="foodSubmission.js"></script>
</body>
</html>