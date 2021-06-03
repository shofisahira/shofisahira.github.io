<?php require_once "require_access.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Account | Ruang Mahasiswa</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .title p {
            padding-top: 50px;
        }
        .conversation {
            position:fixed;
            left: 30px;
            bottom: 30px;
            cursor: pointer;
        }
        @media screen and (max-width: 768px){
            .img {
                display: none;
            }
            .col-2-1 {
                width: 100%;
            }
            .stroke {
                display: none;
            }
            .col-3-1 {
                display: none;
            }
            .conversation {
                right: 30px !important;
                left: auto;
            }
        }
        .rect {
            height: 100%;
            width: 50%;
            position: absolute;
            bottom: 0;
            opacity: 70%;
        }
        .rect-left {
            left: 0;
            background-color: #F5A25D70;

        }
    </style>
</head>
<body>
<?php include_once "common/header.php"?>

<div class="container height-100vh padding-40 row">
    <div class="none-sm col-3-1 flex flex-column flex-center">
        <p class="fz-18 fw-400 text-center">Huriyah Anisah Nur Humairoh</p>
        <div class="testi-image margin-auto" style="background-image: url('img/Cari_Internship_Humay.jpg')">
        </div>
        <p class="fz-18 fw-400 text-center">Sistem Informasi, Universitas Brawijaya</p>
    </div>
    <div class="col-3-2 padding-40">
        <div class="title" style="position: relative; height: 100px">
            <span class="rect rect-left"></span>
            <p class="fz-48 fw-400 stroke text-center white">RIWAYAT INTERNSHIP</p>
        </div>
        <p class="text-justify fz-16">I'm a fast learner and always explore new things. I have a high interest in Self-Development, Business, and Front-End Web Development.</p>
        <div class="images">
            <div class="image-item float-left" style="background-image: url('img/rguru.jpg')"></div>
            <div class="image-item float-left" style="background-image: url('img/shopee.png')"></div>
            <div class="image-item float-left" style="background-image: url('img/tiketcom.jpg')"></div>
        </div>
    </div>
</div>

<script src="js/renderer.js"></script>

</body>
</html>