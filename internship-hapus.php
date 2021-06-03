<?php

require_once "login_action.php";

if(isset($_COOKIE['loggedIn'])){
    if(!login($_COOKIE['username'], $_COOKIE['password'])) {
        header('Location: login.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}

require_once "database/internship.php";

if(isset($_POST['id'])){
    $intern = new Internship();
    $intern->delete($_POST['id']);
}

header("Location: list-internship.php");