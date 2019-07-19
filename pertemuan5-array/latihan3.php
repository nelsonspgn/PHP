<?php
$mahasiswa =[
                 ["Sandika Galih","20019288492","Teknik Informatika","sandhikagalih@unpas.com"],
                 ["Nelson Gunawan","20208312491","Teknik Informatika","nelsongunawan@gmail.com"],
                 ["Yudi Permana","2030499102371","Kedokteran","yudipermana@yahoo.com"]
            ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>


<h1>Daftar Mahasiswa</h1>


<!-- ini untuk array 1 dimensi -->
<!-- dikomen agar tidak mengganggu yang bawah -->

    <!-- <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach ?>
    </ul> -->





<!-- ini untuk array multidimensi -->

<?php foreach ($mahasiswa as $mhs) :?>
<ul>
    <li>Nama: <?= $mhs[0]; ?></li>
    <li>NRP: <?= $mhs[1]; ?></li>
    <li>JURUSAN: <?= $mhs[2]; ?></li>
    <li>EMAIL: <?= $mhs[3]; ?></li>
</ul>
<?php endforeach ?>
</body>
</html>