<?php
    session_start();
    require_once("dao.php");
    $database = new dao();
    if($_SESSION['logged-in'] == "True"){ 
        $_SESSION['logged-in'] = "False";
        $_SESSION['user'] = NULL;
        header("Location: /login.php?pagename=login");
    }
    else {
        $_SESSION['logged-in'] = $database->validateLogin($_POST['username'],$_POST['password']);
        if($_SESSION['logged-in'] == "True"){
            $_SESSION['user'] = $_POST['username'];
            header("Location: /index.php?pagename=info");
        } else {
            header("Location: /login.php?error=1&pagename=login");
        }
    }
    
?>