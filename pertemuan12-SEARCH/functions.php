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
    $gambar = htmlspecialchars($data['gambar']);

    
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




function ubah($data){
   //langkah 1 ambil data dari tiap elemen dalam form
   $id = $data["id"];
   $nrp = htmlspecialchars($data['nrp']);
   $nama = htmlspecialchars($data['nama']);
   $email = htmlspecialchars($data['email']);
   $jurusan = htmlspecialchars($data['jurusan']);
   $gambar = htmlspecialchars($data['gambar']);

   
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



















?>