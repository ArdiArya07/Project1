<?php
require '../koneksi.php';
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];
$sql = mysqli_query($conf, "INSERT INTO petugas(nama_petugas,username,password,telp,level) values('$nama','$user','$pass','$telp','$level')");
if ($sql) {
    echo "<script type='text/javascript'>alert('Registrasi Berhasil..!'); location.href=\"admin.php?url=lihat_petugas\";</script>";
}
?>