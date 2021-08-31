<?php
require '../koneksi.php';
$nik = $_GET['nik'];
$sql = mysqli_query($conf, "DELETE FROM masyarakat WHERE nik='$nik'");
if ($sql) {
    echo "<script type='text/javascript'>alert('Data Berhasil Dihapus..!'); location.href=\"admin.php?url=lihat_masyarakat\";</script>";
}
?>