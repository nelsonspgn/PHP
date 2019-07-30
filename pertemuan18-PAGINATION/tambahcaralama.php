<?php
//koneksi
$conn = mysqli_connect("localhost","root","","phpdasar");

//cek apakah tombol sumbit sudah ditekan atau belum

if ( isset($_POST["submit"]) ){

    //ambil data dari tiap elemen dalam form
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    //query insert data
    $query ="INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);

    //menggunakan ini agar tau berhasil atau tidak , jika int -1 berarti gagal jika 1 berarti berhasil, ini sebabnya if di bawahnya lebih besar dari 1
    var_dump(mysqli_affected_rows($conn));

    //cek apakah data berhasil di tambahkan atau tidak
  if (mysqli_affected_rows($conn) > 0){
      echo "berhasil";
  } else {
      echo "gagal";
      echo "<br>";
      echo mysqli_error($conn);
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