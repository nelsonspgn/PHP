<?php
// $mahasiswa =[
//                  ["Sandika Galih","20019288492","Teknik Informatika","sandhikagalih@unpas.com"],
//                  ["Nelson Gunawan","20208312491","Teknik Informatika","nelsongunawan@gmail.com"],
//                  ["Yudi Permana","2030499102371","Kedokteran","yudipermana@yahoo.com"]
//             ];


//Array Associative
//definisnya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Sandhika Galih",
    "nrp" => "319087123123",
    "email" => "sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "sandhika.jpg"
    ],

    [
    "nama" => "Nelson Gunawan",
    "nrp" => "456887951",
    "email" => "nelsongunawan@gmail.com" ,
    "jurusan" => "Teknik Informatika",
    "gambar" => "nelson.jpg"
    ]
            ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>

  
       <?php foreach ($mahasiswa as $mhs) : ?>
       <ul>

        <li>Nama: <?=  $mhs['nama']; ?></li>
        <li>NRP: <?=  $mhs['nrp']; ?></li>
        <li>Email: <?=  $mhs['email']; ?></li>
        <li>Jurusan: <?=  $mhs['jurusan']; ?></li>
        <li><img src="img/<?= $mhs["gambar"];?>" alt=""></li>
        </ul>
        <?php endforeach ?>


</body>
</html>

