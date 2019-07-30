<?php 

session_start();
if ( isset($_SESSION['login']) ){
    header("Location: index.php");
    exit;
}

require 'functions.php';


if ( isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    //fungsi ini untuk menghitung berapa baris yang dikembalikan dari fungsi select
    //kalau ketemu nilainya 1 kalau ada username di dalam tbl user
    //jika tidak ada 0
    if ( mysqli_num_rows($result) === 1 ){

        //cek password
        //1. ambil password dari database berdasarkan username = '$username'
        //2. kalau tidak ada keluar dari if
        //3. perbolehkan user masuk ke halaman index.php
        $row = mysqli_fetch_assoc($result);
       if ( password_verify($password, $row['password'])){
           //set session
            $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
       } 


    }

    $error = true;

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>
    
<h1>halaman Login</h1>
<?php if ( isset($error)) : ?>
    <p style="color:red; font-style:italic;">username / password salah</p>
<?php endif; ?>



<form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" name="password">
            </li>

            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>

         

            <li>
                <button type="submit" name="login">Login</button>
            </li>

        </ul>
</form>


</body>
</html>