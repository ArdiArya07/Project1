<?php
require '../koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conf, "DELETE FROM tanggapan WHERE id_tanggapan='$id'");
if ($sql) {
    echo "<script type='text/javascript'>alert('Data Berhasil Dihapus..!'); location.href=\"admin.php?url=lihat_tanggapan\";</script>";
}
?>