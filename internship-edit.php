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


if(isset($_POST['company_name'])){
    $name = $_POST['company_name'];
    $category = $_POST['category'];
    $details = $_POST['details'];
    $description = $_POST['description'];
    $title = $_POST['title'];
    $email = $_POST['company_email'];

    $data = array(
        'company_name' => $name,
        'company_email' => $email,
        'category' => $category,
        'details' => $details,
        'description' => $description,
        'title' => $title,
    );

    $intern = new Internship();
    $intern->update($data, $_POST['id']);
    header('Location: list-internship.php');



}


if(isset($_POST['id'])){
    $intern = new Internship();
    $result = $intern->get($_POST['id']);
    if($result){
        $row = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        *, ::after, ::before {
            box-sizing: border-box;
        }

        form p {
            font-size: 16px;
            font-weight: bold;
        }
        button {
            margin: 40px;
        }
        input, label, textarea, select {
            min-width: 100%;
        }
        input, textarea, select {
            background-color: #E6E6E6;
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 5px;
        }
        input:focus, textarea:focus, select:focus {
            outline-color: #679B9B;
        }

        .font-gothic {
            font-family: "Century Gothic", serif;
        }
    </style>
</head>
<body>
<?php include "common/header.php";?>
<div class="font-gothic" style="width:100%; text-align: center; margin-top: 120px; margin-bottom: 0px">
    <h1>Edit Internship</h1>
</div>
<div class="container height-100vh padding-40 row">
    <div class="col-3-1"></div>
    <form enctype="multipart/form-data" action="internship-edit.php" method="post" class="padding-40 col-3-1" style="font-family: 'Century Gothic', serif;">
        <input type="hidden" value="<?php echo $row->id?>" name="id">
        <p>NAMA PERUSAHAAN</p>
        <label>
            <input type="text" name="company_name" required value="<?php echo $row->company_name?>">
        </label>
        <p>EMAIL PERUSAHAAN</p>
        <label>
            <input type="text" name="company_email" required  value="<?php echo $row->company_email?>">
        </label>
        <p>JUDUL KEGIATAN</p>
        <label>
            <input type="text" name="title" required  value="<?php echo $row->title?>">
        </label>
        <p>KATEGORI INTERNSHIP</p>
        <label>
            <select name="category" required>
                <option value="-1">Pilih Kategori...</option>
                <option <?php echo $row->category == 1? "selected='selected'" : "";?> value="1">Pendidikan</option>
                <option <?php echo $row->category == 2? "selected='selected'" : "";?> value="2">Marketing</option>
                <option <?php echo $row->category == 3? "selected='selected'" : "";?> value="3">Pelayanan</option>
                <option <?php echo $row->category == 4? "selected='selected'" : "";?> value="4">IT</option>
            </select>
        </label>
        <p>DESKRIPSI INTERNSHIP</p>
        <label>
            <textarea name="description" required><?php echo $row->description?></textarea>
        </label>
        <p>DETAIL INFORMASI</p>
        <label>
            <textarea name="details" required><?php echo $row->details?></textarea>
        </label>
        <p>LOGO PERUSAHAAN</p>
        <label>
            <input type="file" name="file_logo" required value="<?php echo $row-> file_logo?>">
          </label>
        <div style="display: flex; justify-content: center; align-items: center; min-width: 100%">
            <button type="submit" class="btn btn-fill fw-400">DAFTAR</button>
        </div>
    </form>
    <div class="col-3-1"></div>
    <script src="js/renderer.js"></script>
</div>
</body>
</html>
<?php
    }
} else {
header('Location: list-internship.php');
}
    ?>