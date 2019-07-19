<?php
//array
//sebuah variable yang bisa menampung banyak nilai
//pasangan atara key dan value
//key = index yang dimulai dari 0


//cara membuat array
//cara lama

$hari = array("senin","selasa","rabu");
"<br>";

//cara baru
$bulan = ["januari","februari","maret"];
"<br>";

//elemen pada array boleh memiliki tipe data yang berbeda
$arr1 = [123,"tulisan",false];
"<br>";

//cara menampilkan array kelayar
//var_dump() atau print_r

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
//menampilkan 1 elemen pada array
echo $arr1[1];
echo "<br>";
echo $bulan[1];
echo "<br>";

//menambah elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);



























?>