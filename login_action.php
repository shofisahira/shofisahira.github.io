<?php

function login($u, $p){
    $user = 'admin';
    $password = 'admin';
    $user = 'user';
    $password = 'rahasia';
    if($u === $user && $p === $password){

        if(!isset($_COOKIE['loggedIn'])){
            setcookie('username', $u, time() + 60 * 60 * 1);
            setcookie('password', $p, time() + 60 * 60 * 1);
            setcookie('loggedIn', true, time() + 60 * 60 * 1);
        }

        return true;
    } else {
        if(isset($_COOKIE['loggedIn'])){
            setcookie('username', $u, time() - 60 * 60 * 1);
            setcookie('password', $p, time() - 60 * 60 * 1);
            setcookie('loggedIn', true, time() - 60 * 60 * 1);
        }
    }
    return false;
}