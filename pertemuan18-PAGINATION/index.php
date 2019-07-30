<?php
session_start();
if ( !isset($_SESSION['login']) ){
    header("Location: login.php");
    exit;
}


require 'functions.php';

//PAGINATION
//KONFIGURASI

$jumlahDataPerHalaman = 5;

//tentukan jumlah data perhalaman CARA 1
// $result = mysqli_query($conn,"SELECT * FROM mahasiswa" );
// $jumlahData = mysqli_num_rows($result);


// CARA2
$jumlahData = count(query("SELECT * FROM mahasiswa"));
//menentukan jumlah halaman
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
//menentukan kita lagi dihalaman berapa
// if ( isset($_GET['halaman']) ){
// $halamanAktif = $_GET['halaman'];
// } else {
//     $halamanAktif = 1;
// }
//MENGGUNAKAN OPERATOR TERNARY
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
//Untuk menentukan awal data saat dihalaman berapa , untuk angkat setelah limit
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;





$mahasiswa = query ("SELECT * FROM mahasiswa LIMIT $awalData,$jumlahDataPerHalaman");


//tombol cari ditekan

if ( isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST['keyword']);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <style>
    


    
    </style>
</head>
<body>
    
<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">
    <!-- hapus histori pencarian = autocomplete=off -->
    <input type="text" name="keyword" size="40" autofocus="" placeholder="Masukkan keyword pencarian!" autocomplete="off">

    <button type="submit" name="cari">Cari!</button>



</form>
<br>


<!-- NAVIGASI -->

<?php if( $halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif -1; ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i=1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif) : ?>
    <a href="?halaman=<?= $i; ?>" style ="font-weight:bold; color:red;"><?= $i; ?></a>
    <?php else : ?>
    <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
<?php endif; ?>
<?php endfor; ?>

<?php if( $halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif +1; ?>">&raquo;</a>
<?php endif; ?>



<br>
<br>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>

<?php $i=1; ?>
<?php foreach ($mahasiswa as $row ) :?>
<tr>
<td><?= $i; ?></td>
<td>
    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> ||
    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
</td>
<td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50px"></td>
<td><?= $row["nrp"]; ?></td>
<td><?= $row["nama"]; ?></td>
<td><?= $row["email"]; ?></td>
<td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>




</table>
</body>
</html>