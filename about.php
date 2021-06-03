<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABOUT US | Ruang Mahasiswa</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>

        .semi-rect {
            position: absolute;
            right: 0;
            margin-top: 50px;
            top: -70px;
            width: 70%;
            height: 200px;
            background-color: rgba(103, 155, 155, 0.7);
            border-radius: 40px 0 0 40px;
        }
        .block-sm {
            display: none;
        }
        .slide-content {
            width: calc(90% - 100px);
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3);
            padding: 30px;
            margin: 0 20px;
            text-align: justify;
        }
        .writer-avatar {
            width: 100%;
            height: 0;
            padding-top: 100%;
            margin: 20px;
            background-position: center;
            background-size: contain;
            border-radius: 50%;
        }
        .writer{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: calc(10% + 100px);
            padding: 10px;
            margin: 20px;
        }
        .my-slide {
            display: flex;
            align-items: center;
        }

        .carousel {
            margin: 0 calc(40px + 12%);
        }
        .controller-left, .controller-right {
            width: 40px;
            height: 40px;
        }
        .controller-left {
            left: -50px;
        }
        .controller-right {
            right: -50px;
        }
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @media screen and (max-width: 768px){
            .color-orange {
                letter-spacing: initial;
            }
            .writer-avatar {
                width: 100%;
            }
            .block-sm {
                display: block !important;
            }
            .none-sm {
                display: none !important;
            }
            .my-slide {
                flex-direction: column;
                align-items: center;
            }
            .writer {
                width: 100%;
                flex-direction: row;
                justify-content: center;
            }
            .writer-avatar {
                width: 30%;
                padding-top: 30%;
                margin: 0 10% 0 0;
            }
            .writer-info {
                text-align: left;
                font-size: 2vmax;
            }
            .carousel {
                margin: 0 calc(3px + 2%);
            }
            .dot {
                margin-top: 20px;
            }
            .slide-content{
                width: 100%;
                box-sizing: border-box;
                margin-left: 30px;
            }
            .controller-left, .controller-right {
                opacity: 70%;
            }
            .controller-left {
                left: -20px;
            }
            .controller-right {
                right: -20px;
            }
            .col-2-1 div {
                width: 100% !important;
            }
            .col-2-1 div p {
                text-align: justify;
            }
            .semi-rect {
                display: none;
            }
            .height-100vh {
                min-height: 80vh;            
            }
        }
    </style>
</head>
<body>
<?php include_once "common/header.php"?>

<div class="container text-center">
    <div class="row height-100vh">
        <div style="padding-top: 70px"></div>
        <div class="col-2-1 flex flex-column" style="justify-content: center; margin: 50px 0">
            <p class="color-orange fw-400 text-shadow letter-space" style="font-size: 5vmax">ABOUT<br>RUANG<br>MAHASISWA</p>
        </div>
        <div class="col-2-1 flex flex-column" style="justify-content: center">
            <div style="position:relative; height: 0">
                <div class="semi-rect"></div>
                <div style="width: 70%;">
                    <p class="fz-16 opacity-70 text-left" style="z-index: 999">Ruang Mahasiswa merupakan platform yang menyediakan berbagai informasi internship bagi para JobSeeker. Dengan harapan Ruang Mahasiswa dapat membantu mahasiswa dalam menemukan wadah yang dapat mengasah baik soft skill maupun hardskill sekaligus mendapatkan pengalaman di dunia kerja melalui program internship yang ditawarkan.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="height-100vh text-center carousel" style="position:relative;">
        <p class="color-base fz-48 text-shadow fw-400">TESTIMONIAL</p>

        <div class="my-slide fade">
            <div class="writer">
                <div class="writer-avatar" style="background-image: url('img/Testimonial_Icha Adhistia.jpg'); background-size: cover"></div>
                <div class="writer-info">Adhistia Salsabila Putri<br>Program Internship Ruang Guru<br>FILKOM UB 2019</div>
            </div>
            <div class="slide-content">Pertama kali menggunakan Ruang Mahasiswa untuk mencari program - program internship dan akhirnya aku bisa keterima intern di Ruang Guru. Thanks Ruang Mahasiswa sebagai perantara informasi internship untuk mahasiswa.</div>
        </div>

        <div class="my-slide fade">
            <div class="writer">
                <div class="writer-avatar" style="background-image: url('img/Testimonial_Sofi Shahira K.jpg')"></div>
                <div class="writer-info">Sofi Shahira Khairunisa<br>Program Internship RCTI+<br>FILKOM UB 2019</div>
            </div>
            <div class="slide-content">Ruang Mahasiswa memudahkan kita untuk mencari program-program internship untuk mahasiswa. Terima Kasih Ruang Mahasiswa!</div>
        </div>


        <a class="controller-left" onclick="pushSlide(-1)"></a>
        <a class="controller-right" onclick="pushSlide(1)"></a>
        <div style="text-align:center">
            <span class="dot active" onclick="slide(1)"></span>
            <span class="dot" onclick="slide(2)"></span>
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
<script>
    let slide_index = 1;
    showSlide(slide_index);
    function pushSlide(a){
        showSlide(slide_index += a);
    }
    function slide(n){
        showSlide(slide_index = n);
    }
    function showSlide(n) {
        let i;
        let slides = document.getElementsByClassName("my-slide");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slide_index = 1}
        if (n < 1) {slide_index = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slide_index-1].style.display = "flex";
        dots[slide_index-1].className += " active";
    }
</script>

</body>
</html>
