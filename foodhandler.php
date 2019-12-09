<?php
    session_start();
    if($_SESSION['logged-in']=="True"){
        require_once("dao.php");
        $database = new dao();
        if(isset($_GET['food'])){
            header("Location: /food.php?error=1");
        }
        $database->updateFoodChoice($_SESSION['user'], $_GET['food']);
        header("Location: /food.php");
    } else {
        header("Location: /food.php");
    }
    ?>