<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Question Box | Ruang Mahasiswa</title>
    <style>
        textarea {
            height: auto !important;
            font: inherit;
            resize: vertical;
        }
        .gradient {
            background-image: linear-gradient(#679B9B, white);
        }

        @media screen and (max-width: 768px) {
            .col-3-1 {
                display: none;
            }
            .col-3-2 {
                padding: 0 !important;
            }
            .padding-40{
                padding: 0 !important;
            }
            .input-form, .input-width {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<?php include_once "common/header.php"?>

<div class="container height-100vh gradient">
    <div style="padding-top: 60px"></div>
    <p class="fz-48 black text-center">HAVE SOME QUESTIONS?</p>
    <div class="row padding-40" style="padding: 0 40px">
        <div class="col-3-1" style="position: relative">
            <img style="width: 50%; position:absolute; right: 0; top: 0" src="./img/question.png" alt="">
        </div>
        <div class="col-3-2" style="padding: 0 40px">
            <form class="form flex flex-column" action="./index.php">
                <input name="name" type="text" class="input-form" placeholder="Your Name">
                <input name="email" type="email" class="input-form" placeholder="Your Email">
                <textarea rows="4" class="input-form" placeholder="Your Question..."></textarea>
                <button type="submit" class="input-width btn btn-fill fz-18" onclick="openLocation('./index.php')">SUBMIT</button>
            </form>
        </div>
    </div>
</div>



<script src="./js/renderer.js"></script>
</body>
</html>