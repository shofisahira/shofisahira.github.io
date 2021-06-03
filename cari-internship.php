
<?php
    require_once "database/internship.php";

    $intern = new Internship();

    $result = $intern->getAll();

    $categories = array();
    $categories[0] = array();
    $categories[1] = array();
    $categories[2] = array();
    $categories[3] = array();

    if($result){
        while ($row = $result->fetch_object()){
            switch($row->category){
                case 1:
                    array_push($categories[0], $row);
                    break;
                case 2:
                    array_push($categories[1], $row);
                    break;
                case 3:
                    array_push($categories[2], $row);
                    break;
                case 4:
                    array_push($categories[3], $row);
                    break;
            }
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cari Internship | Ruang Mahasiswa</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
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

    </style>
</head>
<body>
<script type="text/javascript">
    let currentTab = 1;
</script>
<?php include_once "common/header.php"?>
<div class="container">
    <div style="margin-top: 70px"></div>
    <ul class="flex flex-center">
        <li id="t-1" class="tab-item active-tab" onclick="toggleTab('1')">Internship Pendidikan</li>
        <li id="t-2" class="tab-item" onclick="toggleTab('2')">Internship Marketing</li>
        <li id="t-3" class="tab-item" onclick="toggleTab('3')">Internship Pelayanan</li>
        <li id="t-4" class="tab-item" onclick="toggleTab('4')">Internship IT</li>
    </ul>
    <div class="col-3-2 margin-auto" style="margin-bottom: 30px">
        <div class="tabs">
            <?php foreach ($categories as $index=>$category){
                ?>
            <div id="tab-<?php echo $index+1?>" <?php if($index!==0) echo "class='display-none'"?>>
            <?php
                if(count($category) === 0){
                    ?>
                        <p class="fz-14 text-center">Belum Ada informasi terkait.</p>
                    <?php
                } else {
                    ?>
                    <div class="">
                        <?php
                        foreach ($category as $row){

                            $desc = str_replace(array("\r\n", "\r", "\n"), "<br />", $row->description);

                            ?><?="<div class='row' style='margin-bottom:50px'>
                            <div class=\"col-3-1 text-center\">
                            <img class=\"img img-round\" src=\"uploads/{$row->logo_path}\" style=\"width: 80%; margin: 10% auto\" alt=\"\" width=\"29\">
                        </div>
                        <div class=\"flex flex-left flex-column col-3-2\">
                            <p class=\"fz-24 fw-400\" style=\"margin-bottom: 0\">{$row->title} - {$row->company_name}</p>
                            <p class=\"fz-12 text-justify\"><i><b>{$desc}</b></i></p>
                            <button class=\"btn btn-fill fw-400\" style=\"margin-right: auto\">DAFTAR</button>
                        </div>
                        </div>
                            "?><?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?></div><?php
            }

            ?>
        </div>
    </div>
    <div class="col-3-1"></div>

</div>

<p class="fz-96 fw-400 white text-shadow stroke" style="position: fixed; transform: rotate(-90deg);bottom: 30%; right: -15%;">INTERNSHIP</p>
<img class="conversation" src="img/conversation.png" onclick="openLocation('question-box.php')">



<script src="js/renderer.js"></script>


</body>
</html>