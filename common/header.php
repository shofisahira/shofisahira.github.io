<?php

    require_once "login_action.php";

    $login_nav = ' <a href="login.php">Login</a>';
    if(isset($_COOKIE['loggedIn'])){
        if(login($_COOKIE['username'], $_COOKIE['password'])){
            $login_nav =    '
                            <a href="myaccount.php">My Account</a>
                            <ul class="dropdown-menu" id="dropdown-list">
                                <li class="menu-item" onclick="openLocation(\'list-internship.php\')">List Internship</li>
                                <li class="menu-item" onclick="openLocation(\'internship-form.php\')">Buat Internship</li>
                                <li class="menu-item" onclick="openLocation(\'logout.php\')">Logout</li>
                            </ul>';
        }
    }

    $currentPage = basename($_SERVER['PHP_SELF']);


?>

<style>
    .dropdown-toggler:hover .dropdown-menu {
        display: flex;
    }

    .menu-item {
        width: 200px;
        text-align: center;
        padding: 10px;
        background-color: azure;
    }

    .dropdown-menu{
        display: none;
        flex-direction: column;
        position: absolute;
        top: 35px;
        margin: 0;
        right: 0;
        padding-top: 35px;
        z-index: 0;
        align-items: end;
    }

    .dropdown-toggler{
        display: inline;
        margin-right: 6px;
        margin-left: 6px;
    }

    .dropdown-toggler>a {
        z-index: 999;
    }
</style>
<div class="nav header <?php echo $currentPage==='index.php'?"transparent":""?>" id="nav">
    <a class="nav-brand" href="index.php"><img src="img/logo.png" width="100"></a>
    <div class="menu-hamburger" onclick="toggleMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="nav-list float-right">
        <a href="index.php">Home</a>
        <a href="cari-internship.php">Cari Internship</a>
        <div class="dropdown-toggler">
            <?php echo $login_nav?>
        </div>
    </div>

    <ul class="nav-menu" id="menu-list">
        <li class="menu-item" onclick="openLocation('about.php')">About Us</li>
        <li class="menu-item" onclick="openLocation('customer-support.php')">Customer Support</li>
    </ul>
</div>