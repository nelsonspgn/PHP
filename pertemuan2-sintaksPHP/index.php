<?php
//ini adalah komentar
//ini juga komentar

/* 
ini komentar
ini juga komentar
*/

// Pertemuan 2 - PHP Dasar
//Sintaks PHP

// Standart Output
//echo, print = mencetak tulisan, isi variable
//print_r = mencatak isi variable
//var_dump = melihat isi dari variable

echo "Nelson Saputra Gunawan,";
print_r ("Nelson Saputra Gunawan,");
var_dump ("Nelson Saputra Gunawan,");
var_dump (123);

echo true;
echo false;

// Penulisan sintaks PHP
//1. PHP di dalam HTML
//2. HTML di dalam PHP

//variable dan tipe data
//variable

$nama = "Nelson";

//perbedaan kutip 1 dan kutip 2
//interpolasi ( untuk mengecek didalam string apakah ada variable)

echo "Halo, nama saya $nama";
echo 'Halo, nama saya $nama';

// Operator
// Aritmatika + - * / %
echo 1 + 1;

$x =10;
$y =20;

echo $x * $y;

// operator penggabung string / concat / concatenation
// .
$nama_depan = "Nelson";
$nama_belakang = "Gunawan";
echo $nama_depan . " " . $nama_belakang;

// operator assignment
// =   ,+=   , -+   , *=   , /=    , %= ,  .=

$i = 1;
$i += 5;
echo $i;

// operator perbandingan
// < , > , <= , >== , ==

var_dump(1<5);

// Logika
// && || !

$logic = 10;
var_dump( $logic < 20 && $logic % 2 == 0)



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP</title>
</head>
<body>


    <!-- contoh php didalam html -->
    <h1>Halo, Selamat Datang <?php echo "Nelson";?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <?php
        echo "<h1> Halo, Selamat Datang Nelson </h1>"
    ?>



    <!-- contoh variable -->
    <h1>Halo, Selamat Datang <?php echo $nama;?></h1>

</body>
</html>