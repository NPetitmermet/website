<?php
    require_once("dao.php");
    session_start();
    $err = array("","");
    if($_POST['password'] === $_POST['password-confirm'] && strlen($_POST['password'])!==0 && $_POST['username']!=""){
        $database = new dao();
        if($database->addNewUser($_POST['username'],$_POST['password'])==="True"){
            header("Location: /login.php?pagename=signup");
        } else {
            header("Location: /signup.php?username=".$_POST['username']."&takenuser=True&pagename=signup");
        }
    } else if(strlen($_POST['password'])==0||strlen($_POST['password-confirm']==0)){
        $err[1] = 1;
        if($_POST['username']==""){
            $err[0] = 1;
            return header("Location: /signup.php?error=".$err[0].$err[1]."&pagename=signup");
        } else {
            $err[0] = 0;
            return header("Location: /signup.php?error=".$err[0].$err[1]."&pagename=signup");
        }
        
    } else if(($_POST['password'] !== $_POST['password-confirm']) && $_POST['username']==""){
        $err[0] = 1;
        $err[1] = 1;
        header("Location: /signup.php?error=".$err[0].$err[1]."&pagename=signup");
    } else if($_POST['username']==""){
        $err[0] = 1;
        $err[1] = 0;
        header("Location: /signup.php?error=".$err[0].$err[1]."&pagename=signup");
    } else {
        $err[0] = 0;
        $err[1] = 1;
        header("Location: /signup.php?error=".$err[0].$err[1]."&username=".$_POST['username']."&pagename=signup");
    }
?>