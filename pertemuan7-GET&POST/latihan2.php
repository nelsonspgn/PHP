<?php
//cek apakah tidak ada di $_GET

if ( !isset($_GET['nama']) ||
!isset($_GET['nrp']) ||
!isset($_GET['email']) ||
!isset($_GET['jurusan']) ||
!isset($_GET['gambar'])){

    //redirect
    //memindahkan user kehalaman lain

    header("Location: latihan1.php");
    exit;

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail mahasiswa</title>
</head>
<body>
    <ul>
            <li><img src="img/<?= $_GET['gambar']?>" alt=""></li>
            <li><?= $_GET['nama']; ?></li>
            <li><?= $_GET['nrp']; ?></li>
            <li><?= $_GET['email']; ?></li>
            <li><?= $_GET['jurusan']; ?></li>           
    </ul>

    <a href="latihan1.php">kembali ke latihan1</a>
</body>
</html>