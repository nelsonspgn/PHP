<?php
require 'functions.php';
//cek apakah tombol sumbit sudah ditekan atau belum
if ( isset($_POST["submit"]) ){

  

   //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0 ){
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>";

    }
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

<a href="index.php">kembali ke index</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp">
            </li>

            <li>
                 <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama">
            </li>

            <li>
                 <label for="email">E-mail: </label>
                <input type="text" name="email" id="email">
            </li>

            <li>
                 <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>

            <li>
                 <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>

        </ul>


    
    
    
    </form>
</body>
</html>