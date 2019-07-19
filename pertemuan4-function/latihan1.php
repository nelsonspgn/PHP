<?php
//menampilkan hari ini
echo date("l");
echo  "<br>";

//menampilkan tanggal
echo date("d");
echo  "<br>";

//menampilkan bulan
echo date("M");
echo  "<br>";

//menampilkan bulan dalam bentuk angka
echo date("m");
echo  "<br>";

//menampilkan tanggal lengkap
echo date ("l, d-M-Y");
echo  "<br>";

//time
//UNIX Timestamp / EPOCH time
//detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo  "<br>";

//menghitung 100 hari kedepan hari apa
//kalau mau 100 hari kebelakang di ganti saja + nya menjadi -
echo date ("l", time()+60*60*24*100);
echo  "<br>";

//menghitung saya lahir hari apa
//menggunakan fungsi mktime
//membuat sendiri detik dari 1 jan 1970
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l",mktime(0,0,0,3,8,1994));
echo  "<br>";

//strtotime masukin format tanggal keluarnya detik
echo strtotime("25 aug 1985");
echo  "<br>";

?>