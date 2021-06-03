<?php

require_once "login_action.php";

if(isset($_COOKIE['loggedIn'])){
    if(!login($_COOKIE['username'], $_COOKIE['password'])) {
        header('Location: login.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}

require_once "database/internship.php";

$intern = new Internship();

$result = $intern->getAll();

$data = array();
$categories = array(
    1=>'Pendidikan',
    2=>'Marketing',
    3=>'Pelayanan',
    4=>'IT'
);

if($result){
    while ($row = $result->fetch_object()){
        array_push($data, $row);
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Internship</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        *, ::after, ::before {
            box-sizing: border-box;
        }

        .font-gothic {
            font-family: "Century Gothic", serif;
        }

        table, tr, td, th {
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-collapse: collapse;
        }
        td, th {
            padding: 20px;
        }
    </style>
</head>
<body>
<?php include "common/header.php";?>
<div class="font-gothic" style="width:100%; text-align: center; margin-top: 120px; margin-bottom: 0px">
    <h1>List Internship</h1>
    <button onclick="openLocation('internship-form.php')">Tambah baru</button>

</div>
<div class="container height-100vh padding-40 row">
    <table>
        <tr>
            <th>Nama Perusahaan</th>
            <th>Email Perusahaan</th>
            <th>Judul Kegiatan</th>
            <th>Kategori Internship</th>
            <th>Deskripsi Internship</th>
            <th>Detail Internship</th>
            <th>Logo</th>
            <th>Aksi</th>
        </tr>
        <?php
            foreach ($data as $row):
                $category = $categories[$row->category];
        ?>
            <?="
            <tr>
                <td>$row->company_name</td>
                <td>$row->company_email</td>
                <td>$row->title</td>
                <td>$category</td>
                <td>$row->description</td>
                <td>$row->details</td>
                <td><img width='100' src='uploads/$row->logo_path'></td>
                <td>
                    <form method='post' action='internship-edit.php'>
                        <input type='hidden' value='$row->id' name='id'>
                        <button type='submit'>EDIT</button>
                    </form>
                    <form method='post' action='internship-hapus.php'>
                        <input type='hidden' value='$row->id' name='id'>
                        <button type='submit'>HAPUS</button>
                    </form>
                </td>
               
            </tr>
            "?>
        <?php
        endforeach;
        ?>

    </table>
</div>
<script src="js/renderer.js"></script>
</body>
</html>