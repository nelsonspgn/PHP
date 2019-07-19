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
    $nrp = $data['nrp'];
    $nama = $data['nama'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];
    $gambar = $data['gambar'];

    
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

?>