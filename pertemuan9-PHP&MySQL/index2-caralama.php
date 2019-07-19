<?php
//koneksi ke databse
$conn = mysqli_connect("localhost","root","", "phpdasar");

//ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// CARA MEMUNCULKAN ERROR QUERY
// if (!$result){
//     echo mysqli_error($conn);
// }


//ambil data (fetch) mahasiswa dari object result
// ada 4 cara
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() //mengembalikan array associative
// mysqli_fetch_array() //mengembalikan array numerik bisa & array associative bisa
// mysqli_fetch_object() // mengembalikan object menggunakan -> ( $mhs->email)


//Contoh ambil data dari db dan tampilkan di php
// while ( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs['nama']);
// }


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
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>

<?php $i=1; ?>
<?php while ($row= mysqli_fetch_assoc ($result)) :?>
<tr>
<td><?= $i; ?></td>
<td>
    <a href="">Ubah</a> ||
    <a href="">Hapus</a>
</td>
<td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50px"></td>
<td><?= $row["nrp"]; ?></td>
<td><?= $row["nama"]; ?></td>
<td><?= $row["email"]; ?></td>
<td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>




</table>
</body>
</html>