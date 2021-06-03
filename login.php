<?php
    session_start();

    require_once('login_action.php');

    if(isset($_COOKIE['loggedIn'])){
        if(login($_COOKIE['username'], $_COOKIE['password'])){
            header('Location: index.php');
            exit();
        }
        session_destroy();
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $loggedin = login($_POST['username'], $_POST['password']);
        if($loggedin){
            header('Location: index.php');
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruang Mahasiswa | LOG IN</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        form {
            width: 80%;
            margin: 0 10%;
        }
        @media screen and (max-width: 768px){
            body {
                overflow-y: hidden;
            }
            .none-sm {
                display: none;
            }
            .flex {
                text-align: center;
            }
            .input-form, .input-width{
                width: 100%;
            }
            .input-width {
                height: 40px;
            }
            .brands {
                display: flex;
                justify-content: center;
            }


        }

        .input-form:focus {
            border: 1px solid #00ffff70;
            transition: all 0.5s;
        }
    </style>
</head>
<body>

<?php include_once "common/header.php"?>

<div class="container">
    <div class="row">
        <div class="none-sm col-2-1 white height-100vh flex flex-column" style="background-image: url('./img/Background sign in & sign up.jpg')">
            <div style="margin-top: 100px; width: 100%"></div><br>
            <p class="fz-36">WELCOME BACK!</p>
            <p class="fz-18 text-center">To keep connected with us please login <br> with your personal account</p>
        </div>

        <div class="col-2-1 height-100vh">
            <div style="margin-top: 100px; width: 100%"></div>
            <form class="form flex flex-column" action="login.php" method="post">
                <p class="title fz-24 fw-400">SIGN IN</p>
                <ul class="brands">
                    <li class="img-round bg-icon bg-img-facebook" onclick="openLocation('https://www.facebook.com')"></li>
                    <li class="img-round bg-icon bg-img-google" onclick="openLocation('https://www.google.com')"></li>
                    <li class="img-round bg-icon bg-img-linkedin" onclick="openLocation('https://www.linkedin.com')"></li>
                </ul>
                <p class="text-center">or use your email account</p>
                <input name="username" type="text" class="input-form" placeholder="Username or Email">
                <input name="password" type="password" class="input-form" placeholder="Password">
                <button type="submit" class="input-width btn btn-fill-2 fz-18" onclick="openLocation('../index.html')">SIGN IN</button>
                <p class="transparent" style="margin-right: auto; margin-left: 10%">Don't have an account? <a href="signup.php"><u>Sign Up</u></a></p>
            </form>
        </div>
    </div>


</div>


<script src="./js/renderer.js"></script>

</body>
</html>