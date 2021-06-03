<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruang Mahasiswa</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <style type="text/css">
        .fz-96 {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: rgba(0, 0, 0, 0.7);
        }
        .block-sm {
            display: none !important;
        }
        @media screen and (max-width: 768px){
            .height-60vh, .height-100vh {
                min-height: auto;
            }
            .none-sm {
                display: none !important;
            }
            .col-3-2.padding-40 {
                padding: 0;
            }
            .block-sm{
                display: block !important;
            }
            .image-item {
                width: 33%;
                padding-top: 33%;
            }
            .white.fz-18 {
                font-size: 14px;
            }

        }

        .title p {
            padding-top: 50px;
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
        .rect-right {
            right: 0;
            background-color: #679B9B70;

        }
    </style>
</head>
<body>
<?php include_once "common/header.php";?>

<div class="container height-100vh bg-image-1 text-center" style="min-height: 100vh;">
    <div style="padding-top: 20vh"></div>
    <p class="fz-48 white" style="line-height: 10px">Embrace Your Future</p>
    <p class="white fz-18" style="max-width: 600px;padding: 20px 0px; margin: auto">Develop yourself and feel the real work experience through various opportunity internship program while boosting your career prospects with an various activities provided by the company.</p>
    <button class="btn btn-fill fz-14" onclick="openLocation('signup.php')">Get Started</button>
</div>
<div class="container height-100vh padding-40 row">
    <div class="none-sm col-3-1 flex flex-column flex-center">
        <p class="fz-18 fw-400 text-center">TESTIMONIAL</p>
        <div class="testi-image margin-auto" style="background-image: url('img/Cari_Internship_Humay.jpg')">
        </div>
        <button class="btn btn-fill fz-14" style="width: inherit; margin-top: 20px" onclick="openLocation('common/cari-internship.php')">Learn More</button>
    </div>
    <div class="col-3-2 padding-40">
        <div class="title" style="position: relative; height: 100px">
            <span class="rect rect-left"></span>
            <p class="fz-48 fw-400 stroke text-center white">CARI INTERNSHIP</p>
        </div>
        <p class="text-justify fz-16">Informasi mengenai berbagai program internship yang ditawarkan oleh beberapa perusahaan dengan pengelompokkan pada berbagai jenis bidang.</p>
        <div class="images">
            <div class="image-item float-left" style="background-image: url('img/Internship.jpg')"></div>
            <div class="image-item float-left" style="background-image: url('img/Internship7.jpg')"></div>
            <div class="image-item float-left" style="background-image: url('img/Internship5.jpg')"></div>
        </div>
        <button class="block-sm btn btn-fill fz-14" style="width: inherit; margin-top: 20px" onclick="openLocation('common/cari-internship.php')">Learn More</button>
    </div>
</div>

<div class="container height-100vh padding-40 row">
    <div class="col-3-2 padding-40">
        <div class="title" style="position: relative; height: 100px">
            <span class="rect rect-right"></span>
            <p class="fz-48 fw-400 stroke text-center white">CARI INTERNSHIP</p>
        </div>
        <p class="text-justify fz-16">Informasi mengenai berbagai program internship yang ditawarkan oleh beberapa perusahaan dengan pengelompokkan pada berbagai jenis bidang.</p>
        <div class="images">
            <div class="image-item float-left" style="background-image: url('img/Internship3.jpeg')"></div>
            <div class="image-item float-left" style="background-image: url('img/Internship6.jpg')"></div>
            <div class="image-item float-left" style="background-image: url('img/Internship4.jpg')"></div>
        </div>
    </div>
    <div class="none-sm col-3-1 flex flex-column flex-center">
        <p class="fz-18 fw-400 text-center">TESTIMONIAL</p>
        <div class="testi-image margin-auto" style="background-image: url('img/Cari_Internship_Sudut.jpeg')">
        </div>
    </div>
</div>
<div class="container height-60vh" style="padding: 0">
    <div class="row">
        <div class="col-2-1 flex flex-center text-center">
            <p class="fz-96 letter-space fw-400 text-shadow white" style="">ABOUT US</p>
        </div>
        <div class="col-2-1 flex flex-center">
            <div class="text-justify about-us">
                <p>Ruang Mahasiswa merupakan platform yang menyediakan berbagai informasi internship bagi para JobSeeker. Informasi mengenai internship yang dipublikasikan dikelompokkan sesuai bidang program Intenship. Dengan harapan Ruang Mahasiswa dapat membantu mahasiswa dalam menemukan wadah yang dapat mengasah baik soft skill maupun hardskill sekaligus mendapatkan pengalaman di dunia kerja melalui program internship yang ditawarkan. </p>
            </div>
        </div>
    </div>
</div>

<footer class="text-left">
    <div class="row">
        <div class="col-5-1">
            <div class="flex flex-left flex-column">
                <a>Resource</a>
                <a>Home</a>
                <a>About Us</a>
                <a>Contact</a>
            </div>
        </div>
        <div class="none-sm col-5-3">
            <div class="flex flex-column">
                <img src="img/rm.png" width="200">
                <p>Copyright<sup>&copy;</sup> 2020.<br> All Rights Reserved.</p>
            </div>
        </div>
        <div class="col-5-1">
            <div class="flex flex-left flex-column">
                <a>Help</a>
                <a>FAQ</a>
                <a>Privacy Policy</a>
                <a>Terms & Condition</a>
            </div>
        </div>
        <div class="block-sm col-5-3" style="margin-top: 20px">
            <div class="flex flex-column">
                <img src="img/rm.png" width="200">
                <p>Copyright<sup>&copy;</sup> 2020.<br> All Rights Reserved.</p>
            </div>
        </div>
    </div>

</footer>

<script src="js/renderer.js"></script>
<script src="js/transparency.js"></script>

</body>
</html>
