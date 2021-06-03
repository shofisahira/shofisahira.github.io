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

        $target_dir = "uploads/internship/";
        $target_folder = "internship/".basename($_FILES["file_logo"]["name"]);
        $target_file = $target_dir . basename($_FILES["file_logo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $image = getimagesize($_FILES["file_logo"]["tmp_name"]);
        if($image !== false) {
            echo "File is an image - " . $image["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "File sudah ada, coba lagi.";
            $uploadOk = 0;
        }

        if ($_FILES["file_logo"]["size"] > 10000000) {
            echo "Maaf, size terlalu besar. Harus kurang dari 96MB";
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Maaf, hanya JPG, JPEG, PNG & GIF yang diperbolehkan.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Maaf, file tidak dapat diupload.";
        } else {
            if (move_uploaded_file($_FILES["file_logo"]["tmp_name"], $target_file)) {
                $data = array(
                    'company_name' => $name,
                    'company_email' => $email,
                    'category' => $category,
                    'details' => $details,
                    'description' => $description,
                    'title' => $title,
                    'logo_path' => $target_folder
                );

                $intern = new Internship();
                $intern->insert($data);
                header('Location: list-internship.php');

            } else {
                echo "Upload gagal. Coba lagi";
            }
        }



    }
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
    <h1>Daftar Internship Baru</h1>
</div>
<div class="container height-100vh padding-40 row">
    <div class="col-3-1"></div>
    <form enctype="multipart/form-data" action="internship-form.php" method="post" class="padding-40 col-3-1" style="font-family: 'Century Gothic', serif;">
        <p>NAMA PERUSAHAAN</p>
        <label>
            <input type="text" name="company_name" required>
        </label>
        <p>EMAIL PERUSAHAAN</p>
        <label>
            <input type="text" name="company_email" required>
        </label>
        <p>JUDUL KEGIATAN</p>
        <label>
            <input type="text" name="title" required>
        </label>
        <p>KATEGORI INTERNSHIP</p>
        <label>
            <select name="category" required>
                <option selected="selected" value="-1">Pilih Kategori...</option>
                <option value="1">Pendidikan</option>
                <option value="2">Marketing</option>
                <option value="3">Pelayanan</option>
                <option value="4">IT</option>
            </select>
        </label>
        <p>DESKRIPSI INTERNSHIP</p>
        <label>
            <textarea name="description" required></textarea>
        </label>
        <p>DETAIL INFORMASI</p>
        <label>
            <textarea name="details" required></textarea>
        </label>
        <p>LOGO PERUSAHAAN</p>
        <label>
            <input type="file" name="file_logo" required>
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