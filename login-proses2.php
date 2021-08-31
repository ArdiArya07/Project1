<?php
require 'koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = mysqli_query($conf, "SELECT * FROM petugas WHERE username = '$user' AND password = '$pass'");
$cek = mysqli_num_rows($sql);
    if ($cek>0) {
        $data = mysqli_fetch_array($sql);
        if ($data['level'] == "admin") {
            session_start();
            $_SESSION['id_petugas'] = $data['id_petugas'];
            $_SESSION['user'] = $user;
            $_SESSION['nama'] = $data['nama_petugas'];
            $_SESSION['level'] = $data['level'];
            echo "<script type='text/javascript'>alert('Selamat Datang Admin'); location.href=\"admin/admin.php\";</script>";
    } else if ($data['level'] == "petugas") {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        echo "<script type='text/javascript'>alert('Selamat Datang Petugas'); location.href=\"petugas/petugas.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Login Gagal, Username Atau Password Salah'); location.href=\"index.php\";</script>";
        }
    }
?>