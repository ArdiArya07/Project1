<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'verifikasi_pengaduan';
        include 'verifikasi_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'tanggapan';
        include 'tanggapan.php';
        break;

        case 'lihat_petugas';
        include 'lihat_petugas.php';
        break;

        case 'tambah_petugas';
        include 'tambah_petugas.php';
        break;

        case 'edit_petugas';
        include 'edit_petugas.php';
        break;

        case 'lihat_masyarakat';
        include 'lihat_masyarakat.php';
        break;

        case 'lihat_laporan';
        include 'lihat_laporan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;
    }
} else {
    ?>
    Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat<br>Anda Login Sebagai : 
    <b><?php echo $_SESSION['nama'];
    require '../koneksi.php';
    $sql = mysqli_query($conf, "SELECT * FROM pengaduan WHERE status='proses'");
    if ($cek = mysqli_num_rows($sql)) {
    ?></b>
    <div class="col-xl-5 col-md-6 mb-4"><br>
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                        <div class="h6 mb-0 font-weight-bold text-gray-800"><?php echo $cek; ?> Laporan Dari Masyarakat Yang Harus Ditanggapi</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}
?>