<?php 
//koneksi ke databse
$conn = mysqli_connect("localhost","root","", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;

}


function tambah($data){
    //ambil data dari tiap elemen dalam form
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    //upload gambar

    $gambar = upload();
    if (!$gambar)
    {
        return false;
    }

    //query insert data
    global $conn;
    $query ="INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);

    //cek apakah data berhasil di tambahkan atau tidak
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id");
    return mysqli_affected_rows($conn);
}

//fungsi upload
function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yg di upload

    if ( $error === 4){
        echo "<script>
                 alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar');
   </script>";
   return false;
    }

    //cek ukuran terlalu besar

    if($ukuranFile > 1000000 ){
        echo "<script>
        alert('ukuran gambar terlalu besar');
   </script>";
   return false;
    }

        //lolos pengcekan, gambar siap diupload
        //generate nama gambar baru
        $namaFilebBaru = uniqid();
        $namaFilebBaru .= '.';
        $namaFilebBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' .$namaFilebBaru);

    return $namaFilebBaru;




}


function ubah($data){
   //langkah 1 ambil data dari tiap elemen dalam form
   $id = $data["id"];
   $nrp = htmlspecialchars($data['nrp']);
   $nama = htmlspecialchars($data['nama']);
   $email = htmlspecialchars($data['email']);
   $jurusan = htmlspecialchars($data['jurusan']);
   
   $gambarLama = htmlspecialchars($data['gambarLama']);

//cek apakah user pilih gambar baru atau tidak
if ($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
} else {
    $gambar = upload();
}




   //langkah 2 query insert data
   global $conn;
   $query ="UPDATE mahasiswa SET
             nrp = '$nrp',
             nama = '$nama',
             email = '$email',
             jurusan = '$jurusan',
             gambar = '$gambar'
             WHERE id = $id
               ";

   //langkah 3 jalankan query nya
   mysqli_query($conn, $query);

   //langkah 4 cek apakah data berhasil di tambahkan atau tidak
   return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
    ";
    return query($query);
}


function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn,$data['password']);
    $password2 = mysqli_real_escape_string($conn,$data['password2']);

//cek username sudah ada atau belum

$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

if ( mysqli_fetch_assoc($result)){

    echo "<script>
    alert('username sudah terdaftar');
    </script>";


    return false;


}

//cek konfirmasi password

if ( $password !== $password2){

    echo "<script>
    alert('konfirmasi password tidak sesuai!');
    </script>";

    return false;

} else {
   
    //enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);


    //tambahkan user ke database

    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}
}
















?>