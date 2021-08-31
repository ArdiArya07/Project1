<?php
require '../koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conf, "DELETE FROM pengaduan WHERE id_pengaduan='$id'");
if ($sql) {
    echo "<script type='text/javascript'>alert('Data Berhasil Dihapus..!'); location.href=\"admin.php?url=lihat_laporan\";</script>";
}
?>