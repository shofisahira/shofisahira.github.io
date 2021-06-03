<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruang Mahasiswa | SIGN UP</title>
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
            .fz-14 {
                font-size: 12px;
            }
            .input-form, .input-width{
                width: 100%;
            }
            .input-width {
                height: 40px;
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
        <div class="col-2-1 height-100vh">
            <div style="margin-top: 100px; width: 100%"></div>
            <form class="form flex flex-column" action="./index.php">
                <p class="title fz-24 fw-400">CREATE AN ACCOUNT</p>
                <input name="nickname" class="input-form" placeholder="Your Name">
                <input name="email" type="email" class="input-form" placeholder="Your Email">
                <input name="password" type="password" class="input-form" placeholder="Your Password">
                <input name="repeat-password" type="password" class="input-form" placeholder="Repeat your password">
                <p class="fz-14 text-left">* I Agree all statements in <a href="#"><u>Terms of service</u></a></p>
                <button type="submit" class="input-width btn btn-fill-2 fz-18" onclick="openLocation('./index.php')">SIGN UP</button>
                <p class="transparent" style="margin-right: auto; margin-left: 10%">Already have an account? <a href="login.php"><u>Sign In</u></a></p>
            </form>
        </div>
        <div class="col-2-1 none-sm flex flex-column" style="background-size: cover; background: url('./img/Background sign in & sign up.jpg') no-repeat;">
            <div style="margin-top: 100px; width: 100%"></div>
            <p class="fz-36 white">Hello Friend!</p>
            <p class="fz-18 white text-center">Enter your personal details and <br> start journey with us!</p>
        </div>
    </div>


</div>


<script src="./js/renderer.js"></script>

</body>
</html>