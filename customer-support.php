<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Customer Support | Ruang Mahasiswa</title>
    <style>

        .gradient {
            background-image: linear-gradient(#679B9B, white);
        }
        .box-item{
            width: 400px;
            height: 150px;
            margin: 10px 5%;
            background-color: white;
            position: relative;
            font-size: 16px;
            padding-top: 20px;
            box-sizing: border-box;
            border-radius: 40px;
            box-shadow: 1px 1px 14px rgba(0, 0, 0, 0.2);
        }
        .image-container{
            width: 75px;
            height: 75px;
            position: absolute;
            top: -42.5px;
            left: 160px;
            background-color: white;
            border-radius: 50%;
            border: 6px solid #F5A25D;
        }
        .img-cell{
            background-image: url("img/cell.png");
            background-repeat: no-repeat;
            background-size: 35px;
            background-position: center;
        }
        .img-mail{
            background-image: url("img/mail.png");
            background-repeat: no-repeat;
            background-size: 35px;
            background-position: center;
        }

        @media screen and (max-width: 768px){
            .box-item {
                width: 200px;
                height: 100px !important;
                margin: 40px calc(50% - 100px);
                background-color: white;
                position: relative;
                font-size: 14px;
                padding-top: 14px;

            }
            .image-container{
                width: 50px;
                height: 50px;
                position: absolute;
                top: -25px;
                left: 67.5px;
                background-color: white;
                border-radius: 50%;
                border: 6px solid #F5A25D;
            }
            .stroke {
                display: none;
            }
            .fz-24 {
                font-size: 18px;
                margin-bottom: 30px !important;
            }
        }
        @media screen and (max-width: 992px) and (min-width: 768px) {
            .box-item {
                margin: 40px 10px;
            }
            .image-container{
                width: 50px;
                height: 50px;
                position: absolute;
                background-color: white;
                border-radius: 50%;
                border: 6px solid #F5A25D;
            }
        }
    </style>
</head>
<body>

<?php include_once "common/header.php"?>

<div class="container height-100vh gradient">
    <div style="padding-top: 80px"></div>
    <p class="fz-24 black fw-400 text-center" style="margin-bottom: 50px">KEEP IN TOUCH WITH US!</p>
    <div class="flex flex-center">
        <div class="box-item">
            <div style="padding-top: 30px"></div>
            <p class="text-center">021 821 828 127</p>
            <div class="image-container img-cell">
            </div>
        </div>
        <div class="box-item">
            <div style="padding-top: 30px"></div>
            <p class="text-center">Example@gmail.com</p>
            <div class="image-container img-mail">
            </div>
        </div>
    </div>

</div>
<p class="fz-64 fw-400 white text-shadow stroke" style="position: absolute; bottom: 0; left: 10px">CUSTOMER SUPPORT</p>



<script src="js/renderer.js"></script>
</body>
</html>