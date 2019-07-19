<!-- variable scope / lingkup variable -->
<?php
$x = 10;


function tampilX() {

    global $x;
    echo $x;

}


tampilX();
echo "<br>";


//variable global milik PHP
//merupakan Array Associative
//$_GET


var_dump($_GET);
echo "<br>";
echo "<br>";

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
    <title>Get</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <ul>
         <?php foreach($mahasiswa as $mhs) : ?>
         <a href="latihan2.php?nama=<?=$mhs['nama'];?>&nrp=<?=$mhs['nrp']; ?>&email=<?=$mhs['email'];?>&jurusan=<?=$mhs['jurusan'];?>&gambar=<?=$mhs['gambar'];?>"><li><?= $mhs['nama']; ?></li></a>
         <?php endforeach; ?>
    </ul>
</body>
</html>

