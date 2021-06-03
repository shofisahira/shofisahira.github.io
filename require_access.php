<?php

    session_start();

    require_once "login_action.php";
    if(isset($_COOKIE['loggedIn'])){
        if(!login($_COOKIE['username'], $_COOKIE['password'])){
            header('Location: login.php');
            exit();
        }

        session_destroy();
    }

?>
