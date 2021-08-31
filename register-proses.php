<?php
require 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$sql = mysqli_query($conf, "INSERT INTO masyarakat values('$nik','$nama','$user','$pass','$telp')");
if ($sql) {
    echo "<script type='text/javascript'>alert('Registrasi Berhasil..!'); location.href=\"index.php\";</script>";
}
?>